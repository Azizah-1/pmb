<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Assistant - Kampus Anda</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            background: white;
            border-radius: 15px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        .header {
            background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
            color: white;
            padding: 30px;
            text-align: center;
        }

        .header h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
        }

        .header p {
            font-size: 1.1em;
            opacity: 0.9;
        }

        .content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0;
            min-height: 600px;
        }

        .chat-section, .tools-section {
            padding: 30px;
        }

        .chat-section {
            background: #f8f9fa;
            border-right: 1px solid #e9ecef;
        }

        .tools-section {
            background: white;
        }

        .section-title {
            font-size: 1.3em;
            color: #2c3e50;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #3498db;
        }

        .chat-messages {
            height: 300px;
            overflow-y: auto;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 15px;
            background: white;
            margin-bottom: 15px;
        }

        .message {
            margin-bottom: 15px;
            padding: 10px 15px;
            border-radius: 10px;
            max-width: 80%;
        }

        .user-message {
            background: #3498db;
            color: white;
            margin-left: auto;
        }

        .ai-message {
            background: #ecf0f1;
            color: #2c3e50;
        }

        .chat-input {
            display: flex;
            gap: 10px;
        }

        .chat-input input {
            flex: 1;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
        }

        .chat-input button {
            padding: 12px 20px;
            background: #3498db;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .chat-input button:hover {
            background: #2980b9;
        }

        .tool-card {
            background: #f8f9fa;
            border: 1px solid #e9ecef;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            transition: transform 0.3s;
        }

        .tool-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .tool-card h3 {
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .tool-card p {
            color: #7f8c8d;
            margin-bottom: 15px;
            font-size: 0.9em;
        }

        .tool-card button {
            width: 100%;
            padding: 10px;
            background: #27ae60;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .tool-card button:hover {
            background: #219a52;
        }

        .file-input {
            margin: 10px 0;
        }

        .status {
            padding: 10px;
            border-radius: 5px;
            margin: 10px 0;
            text-align: center;
            font-weight: bold;
        }

        .status.success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .status.error {
            background: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        .status.info {
            background: #d1ecf1;
            color: #0c5460;
            border: 1px solid #bee5eb;
        }

        .back-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background: #95a5a6;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .back-button:hover {
            background: #7f8c8d;
        }

        @media (max-width: 768px) {
            .content {
                grid-template-columns: 1fr;
            }
            
            .chat-section {
                border-right: none;
                border-bottom: 1px solid #e9ecef;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🤖 AI Assistant Kampus</h1>
            <p>Dapatkan bantuan dan informasi tentang kampus dengan AI</p>
        </div>

        <div class="content">
            <!-- Chat Section -->
            <div class="chat-section">
                <h2 class="section-title">💬 Tanya AI Tentang Kampus</h2>
                
                <div class="chat-messages" id="chat-messages">
                    <div class="message ai-message">
                        Halo! Saya AI Assistant kampus. Ada yang bisa saya bantu tentang informasi kampus, jurusan, atau beasiswa?
                    </div>
                </div>

                <div class="chat-input">
                    <input type="text" id="message-input" placeholder="Tanyakan tentang kampus, jurusan, beasiswa..." onkeypress="handleKeyPress(event)">
                    <button onclick="sendMessage()">Kirim</button>
                </div>

                <div class="model-selector">
                    <label>Model: </label>
                    <select id="model-select">
                        <option value="gpt-3.5-turbo">GPT-3.5 Turbo (Cepat)</option>
                        <option value="gpt-4o">GPT-4o (Lebih Pintar)</option>
                    </select>
                </div>

                <div id="chat-status"></div>
            </div>

            <!-- Tools Section -->
            <div class="tools-section">
                <h2 class="section-title">🛠️ Tools AI</h2>

                <div class="tool-card">
                    <h3>🖼️ Analisis Gambar</h3>
                    <p>Upload gambar untuk dianalisis oleh AI (foto kampus, diagram, dll)</p>
                    <input type="file" id="image-file" class="file-input" accept="image/*">
                    <textarea id="image-prompt" placeholder="Apa yang ingin Anda ketahui dari gambar ini?" rows="3" style="width: 100%; margin: 10px 0; padding: 10px; border: 1px solid #ddd; border-radius: 5px;"></textarea>
                    <button onclick="analyzeImage()">Analisis Gambar</button>
                </div>

                <div class="tool-card">
                    <h3>🔍 Test Koneksi API</h3>
                    <p>Periksa apakah koneksi AI Assistant berfungsi dengan baik</p>
                    <button onclick="testConnection()">Test Koneksi</button>
                    <div id="connection-status"></div>
                </div>

                <div class="tool-card">
                    <h3>🎓 Contoh Pertanyaan</h3>
                    <p>• Jelaskan tentang jurusan Teknik Lingkungan<br>
                       • Apa saja syarat beasiswa?<br>
                       • Bagaimana prospek kerja lulusan?<br>
                       • Fasilitas apa saja yang ada di kampus?</p>
                </div>

                <a href="{{ route('beranda') }}" class="back-button">← Kembali ke Beranda</a>
            </div>
        </div>
    </div>

    <script>
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        function handleKeyPress(event) {
            if (event.key === 'Enter') {
                sendMessage();
            }
        }

        async function sendMessage() {
            const messageInput = document.getElementById('message-input');
            const message = messageInput.value.trim();
            const model = document.getElementById('model-select').value;
            
            if (!message) return;

            // Add user message to chat
            addMessage(message, 'user');
            messageInput.value = '';

            // Show loading
            const statusDiv = document.getElementById('chat-status');
            statusDiv.innerHTML = '<div class="status info">AI sedang mengetik...</div>';

            try {
                const response = await fetch('/ai/chat', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({ 
                        message: message,
                        model: model
                    })
                });
                
                const result = await response.json();
                
                if (result.success) {
                    addMessage(result.content, 'ai');
                    statusDiv.innerHTML = '<div class="status success">Selesai</div>';
                } else {
                    addMessage(`Maaf, terjadi error: ${result.error}`, 'ai');
                    statusDiv.innerHTML = '<div class="status error">Error: ' + result.error + '</div>';
                }
            } catch (error) {
                addMessage('Maaf, terjadi kesalahan jaringan.', 'ai');
                statusDiv.innerHTML = '<div class="status error">Network Error: ' + error.message + '</div>';
            }
        }

        async function analyzeImage() {
            const imageFile = document.getElementById('image-file').files[0];
            const prompt = document.getElementById('image-prompt').value.trim();
            
            if (!imageFile) {
                alert('Pilih gambar terlebih dahulu');
                return;
            }
            if (!prompt) {
                alert('Masukkan pertanyaan tentang gambar');
                return;
            }

            const statusDiv = document.getElementById('connection-status');
            statusDiv.innerHTML = '<div class="status info">Menganalisis gambar...</div>';

            const formData = new FormData();
            formData.append('image', imageFile);
            formData.append('prompt', prompt);

            try {
                const response = await fetch('/ai/analyze-image', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: formData
                });
                
                const result = await response.json();
                
                if (result.success) {
                    addMessage(`**Analisis Gambar:** ${result.content}`, 'ai');
                    statusDiv.innerHTML = '<div class="status success">Analisis gambar selesai</div>';
                } else {
                    statusDiv.innerHTML = '<div class="status error">Error: ' + result.error + '</div>';
                }
            } catch (error) {
                statusDiv.innerHTML = '<div class="status error">Network Error: ' + error.message + '</div>';
            }
        }

        async function testConnection() {
            const statusDiv = document.getElementById('connection-status');
            statusDiv.innerHTML = '<div class="status info">Menguji koneksi...</div>';

            try {
                const response = await fetch('/ai/test-api');
                const result = await response.json();
                
                if (result.success) {
                    statusDiv.innerHTML = '<div class="status success">✅ Koneksi API berhasil! ' + result.content + '</div>';
                } else {
                    statusDiv.innerHTML = '<div class="status error">❌ Koneksi gagal: ' + result.error + '</div>';
                }
            } catch (error) {
                statusDiv.innerHTML = '<div class="status error">❌ Network Error: ' + error.message + '</div>';
            }
        }

        function addMessage(content, sender) {
            const messagesDiv = document.getElementById('chat-messages');
            const messageDiv = document.createElement('div');
            messageDiv.className = `message ${sender}-message`;
            messageDiv.textContent = content;
            messagesDiv.appendChild(messageDiv);
            messagesDiv.scrollTop = messagesDiv.scrollHeight;
        }

        // Test connection on page load
        window.addEventListener('load', function() {
            testConnection();
        });
    </script>
</body>
</html>