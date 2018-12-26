<?php

use Illuminate\Database\Seeder;

class LookUpsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('look_ups')->delete();
        
        \DB::table('look_ups')->insert(array (
            0 => 
            array (
                
                'title' => 'hirab',
                'value' => 'acbak',
                'desc' => 'cahevaoi',
                'deleted_at' => '2018-11-30 13:33:51.980',
                'created_at' => '2018-11-30 13:18:41.853',
                'updated_at' => '2018-11-30 13:33:51.980',
            ),
            1 => 
            array (
                
                'title' => 'Branch',
                'value' => 'Biratnagar',
                'desc' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-30 13:18:52.073',
                'updated_at' => '2018-11-30 13:41:07.297',
            ),
            2 => 
            array (
                
                'title' => 'Branch',
                'value' => 'Lumbini',
                'desc' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-30 13:33:06.487',
                'updated_at' => '2018-11-30 13:40:51.537',
            ),
            3 => 
            array (
                
                'title' => 'Branch',
                'value' => 'Pokhara',
                'desc' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-30 13:35:49.583',
                'updated_at' => '2018-11-30 13:40:31.690',
            ),
            4 => 
            array (
                
                'title' => 'Branch',
                'value' => 'Main Branch',
                'desc' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-30 13:35:58.553',
                'updated_at' => '2018-11-30 13:40:19.530',
            ),
            5 => 
            array (
                
                'title' => 'Department',
                'value' => 'Cash',
                'desc' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-30 13:41:26.953',
                'updated_at' => '2018-11-30 13:41:26.953',
            ),
            6 => 
            array (
                
                'title' => 'Department',
                'value' => 'Teller',
                'desc' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-30 13:41:36.993',
                'updated_at' => '2018-11-30 13:41:36.993',
            ),
            7 => 
            array (
                
                'title' => 'Department',
                'value' => 'Credit',
                'desc' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-30 13:42:03.770',
                'updated_at' => '2018-11-30 13:42:03.770',
            ),
            8 => 
            array (
                
                'title' => 'Department',
                'value' => 'IT',
                'desc' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-30 13:42:19.233',
                'updated_at' => '2018-11-30 13:42:19.233',
            ),
            9 => 
            array (
                
                'title' => 'Department',
                'value' => 'F & P',
                'desc' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-30 13:42:29.877',
                'updated_at' => '2018-11-30 13:42:29.877',
            ),
            10 => 
            array (
                
                'title' => 'Department',
                'value' => 'Card',
                'desc' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-30 13:43:17.263',
                'updated_at' => '2018-11-30 13:43:17.263',
            ),
            11 => 
            array (
                
                'title' => 'Department',
                'value' => 'Compliance Unit',
                'desc' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-30 13:44:43.887',
                'updated_at' => '2018-11-30 13:44:43.887',
            ),
            12 => 
            array (
                
                'title' => 'Designation',
                'value' => 'Trainee Junior Assistant',
                'desc' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-30 13:45:31.200',
                'updated_at' => '2018-11-30 13:45:31.200',
            ),
            13 => 
            array (
                
                'title' => 'Designation',
                'value' => 'Junior Assistant',
                'desc' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-30 13:45:47.783',
                'updated_at' => '2018-11-30 13:45:47.783',
            ),
            14 => 
            array (
                
                'title' => 'Designation',
                'value' => 'Junior Assistant',
                'desc' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-30 13:45:48.270',
                'updated_at' => '2018-11-30 13:45:48.270',
            ),
            15 => 
            array (
                
                'title' => 'Designation',
                'value' => 'Assistant',
                'desc' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-30 13:45:54.717',
                'updated_at' => '2018-11-30 13:45:54.717',
            ),
            16 => 
            array (
                
                'title' => 'Designation',
                'value' => 'Senior Assistant',
                'desc' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-30 13:46:55.723',
                'updated_at' => '2018-11-30 13:46:55.723',
            ),
            17 => 
            array (
                
                'title' => 'Designation',
                'value' => 'Messenger',
                'desc' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-30 13:47:08.533',
                'updated_at' => '2018-11-30 13:47:08.533',
            ),
            18 => 
            array (
                
                'title' => 'Designation',
                'value' => 'Junior Executive Office',
                'desc' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-30 13:47:31.817',
                'updated_at' => '2018-11-30 13:47:31.817',
            ),
            19 => 
            array (
                
                'title' => 'Designation',
                'value' => 'Executive Officer',
                'desc' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-30 13:47:43.233',
                'updated_at' => '2018-11-30 13:47:43.233',
            ),
            20 => 
            array (
                
                'title' => 'Designation',
                'value' => 'Senior Executive Officer',
                'desc' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-30 13:47:56.203',
                'updated_at' => '2018-11-30 13:47:56.203',
            ),
            21 => 
            array (
                
                'title' => 'Designation',
                'value' => 'Assistant Manager',
                'desc' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-30 13:48:37.547',
                'updated_at' => '2018-11-30 13:48:37.547',
            ),
            22 => 
            array (
                
                'title' => 'Designation',
                'value' => 'Manager',
                'desc' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-30 13:48:43.997',
                'updated_at' => '2018-11-30 13:48:43.997',
            ),
            23 => 
            array (
                
                'title' => 'Designation',
                'value' => 'Deputy Manager',
                'desc' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-30 13:48:56.253',
                'updated_at' => '2018-11-30 13:48:56.253',
            ),
            24 => 
            array (
                
                'title' => 'Branch',
                'value' => 'Aabookhaireni',
                'desc' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-30 13:59:00.437',
                'updated_at' => '2018-11-30 13:59:00.437',
            ),
            25 => 
            array (
                
                'title' => 'Branch',
                'value' => 'Argali',
                'desc' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-30 13:59:14.820',
                'updated_at' => '2018-11-30 13:59:14.820',
            ),
            26 => 
            array (
                
                'title' => 'Branch',
                'value' => 'Attariya',
                'desc' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-30 13:59:27.260',
                'updated_at' => '2018-11-30 13:59:27.260',
            ),
            27 => 
            array (
                
                'title' => 'Branch',
                'value' => 'Baglung',
                'desc' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-30 13:59:37.493',
                'updated_at' => '2018-11-30 13:59:37.493',
            ),
            28 => 
            array (
                
                'title' => 'Branch',
                'value' => 'Baitadi',
                'desc' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-30 13:59:44.433',
                'updated_at' => '2018-11-30 13:59:44.433',
            ),
            29 => 
            array (
                
                'title' => 'Branch',
                'value' => 'Bajhapatan',
                'desc' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-30 13:59:54.717',
                'updated_at' => '2018-11-30 13:59:54.717',
            ),
            30 => 
            array (
                
                'title' => 'Branch',
                'value' => 'Banepa Branch',
                'desc' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-30 14:00:18.987',
                'updated_at' => '2018-11-30 14:00:42.630',
            ),
            31 => 
            array (
                
                'title' => 'test',
                'value' => 'test',
                'desc' => NULL,
                'deleted_at' => '2018-11-30 14:01:03.723',
                'created_at' => '2018-11-30 14:01:01.757',
                'updated_at' => '2018-11-30 14:01:03.723',
            ),
        ));
        
        
    }
}