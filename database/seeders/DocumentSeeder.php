<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\GeneralSetup\Document;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Document::truncate();
        $document = Document::all()->sortByDesc('id')->first();
        if($document == null) {
            $code_gen = 1;
        } else {
            $code_gen = str_replace("dfc-" , "", $document->file_code)+1;
        }
        

        $documents = array(
            array('id' => '1','application_module_id' => '1','sub_type' => 'new','group_name' => NULL,'addition_filter' => 'step_1','file_code' => 'dfc-000001','file_name' => 'Please Attach Necessary Documents<br/>(eg. You ID)','require' => 'yes','require_if' => NULL,'uploadable_type' => 'single','max_size' => '5','min_size' => '1','file_type' => 'PDF','mimes' => 'mimes:pdf','uploadable_file_count' => '5','status' => 'active','created_at' => '2021-07-19 03:59:48','updated_at' => '2021-07-31 20:59:49'),
        );

        foreach($documents as $key=>$document) {
            unset($document['id'],$document['file_code']);
            $document['file_code'] = "dfc-".str_pad($code_gen+$key, 6, "0", STR_PAD_LEFT);
            Document::create($document);
        }

    }
}
