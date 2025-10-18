# TODO: Add Admission Status Check Feature to Profile

## Tasks
- [x] Create migration to add 'status_penerimaan' enum field to camaba table
- [x] Update Camaba model to include status in fillable and casts
- [x] Create new partial view for status display (resources/views/profile/partials/admission-status.blade.php)
- [x] Update profile edit view to include status section
- [x] Modify ProfileController edit method to load camaba data
- [x] Run migration and test profile page
