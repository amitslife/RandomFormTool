<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Form;
use Carbon\Carbon;
use App\Models\FormController;
use App\Models\FormField;
use App\Models\Domain;
use App\Models\Code;
use App\Models\Domain_Keys;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Amit Kumar Narotra',
            'email' => 'amit.narotra@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('Cobain'),
            'level' => 0
        ]);

        
        
        $form = Form::create([
            'formName' => 'QOL',
            'user_id' => $user->id

        ]);
        $code = Code::create([
            'value' => 'xxxxxx',
        ]);

        $fc = FormController::create([
            'form_id' => $form->id,
            'code_id' => $code->id,
            'attempt' => 1,
            'ip' => '127.0.0.1'
        ]);

        $d1 = Domain::create([
            'domainTitle' => 'Domain 1 : Physical',
            'description' => 'Physical',
        ]);
        $d2 = Domain::create([
            'domainTitle' => 'Domain 2 : Psychological',
            'description' => 'Psychological',
        ]);
        $d3 = Domain::create([
            'domainTitle' => 'Domain 3 : Social relationships',
            'description' => 'Social relationships',
        ]);
        $d4 = Domain::create([
            'domainTitle' => 'Domain 4 : Environment',
            'description' => 'Environment',
        ]);
        $d5 = Domain::create([
            'domainTitle' => 'Overall Quality of Life and General Health',
            'description' => 'QOL',
        ]);

        //  Domain 1
        Domain_Keys::create([
            'domain_id' => $d1->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 7,
            'computedScore' => 0
        ]);
        Domain_Keys::create([
            'domain_id' => $d1->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 8,
            'computedScore' => 6
        ]);
        Domain_Keys::create([
            'domain_id' => $d1->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 9,
            'computedScore' => 6
        ]);
        Domain_Keys::create([
            'domain_id' => $d1->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 10,
            'computedScore' => 13
        ]);
        Domain_Keys::create([
            'domain_id' => $d1->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 11,
            'computedScore' => 13
        ]);
        Domain_Keys::create([
            'domain_id' => $d1->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 12,
            'computedScore' => 19
        ]);
        Domain_Keys::create([
            'domain_id' => $d1->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 13,
            'computedScore' => 19
        ]);
        Domain_Keys::create([
            'domain_id' => $d1->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 14,
            'computedScore' => 25
        ]);
        Domain_Keys::create([
            'domain_id' => $d1->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 15,
            'computedScore' => 31
        ]);
        Domain_Keys::create([
            'domain_id' => $d1->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 16,
            'computedScore' => 31
        ]);
        Domain_Keys::create([
            'domain_id' => $d1->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 17,
            'computedScore' => 38
        ]);
        Domain_Keys::create([
            'domain_id' => $d1->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 18,
            'computedScore' => 38
        ]);
        Domain_Keys::create([
            'domain_id' => $d1->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 19,
            'computedScore' => 44
        ]);
        Domain_Keys::create([
            'domain_id' => $d1->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 20,
            'computedScore' => 44
        ]);
        Domain_Keys::create([
            'domain_id' => $d1->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 21,
            'computedScore' => 50
        ]);
        Domain_Keys::create([
            'domain_id' => $d1->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 22,
            'computedScore' => 56
        ]);
        Domain_Keys::create([
            'domain_id' => $d1->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 23,
            'computedScore' => 56
        ]);
        Domain_Keys::create([
            'domain_id' => $d1->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 24,
            'computedScore' => 63
        ]);
        Domain_Keys::create([
            'domain_id' => $d1->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 25,
            'computedScore' => 63
        ]);
        Domain_Keys::create([
            'domain_id' => $d1->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 26,
            'computedScore' => 69
        ]);
        Domain_Keys::create([
            'domain_id' => $d1->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 27,
            'computedScore' => 69
        ]);
        Domain_Keys::create([
            'domain_id' => $d1->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 28,
            'computedScore' => 75
        ]);
        Domain_Keys::create([
            'domain_id' => $d1->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 29,
            'computedScore' => 81
        ]);
        Domain_Keys::create([
            'domain_id' => $d1->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 30,
            'computedScore' => 81
        ]);
        Domain_Keys::create([
            'domain_id' => $d1->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 31,
            'computedScore' => 88
        ]);
        Domain_Keys::create([
            'domain_id' => $d1->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 32,
            'computedScore' => 88
        ]);
        Domain_Keys::create([
            'domain_id' => $d1->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 33,
            'computedScore' => 94
        ]);
        Domain_Keys::create([
            'domain_id' => $d1->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 34,
            'computedScore' => 94
        ]);
        Domain_Keys::create([
            'domain_id' => $d1->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 35,
            'computedScore' => 100
        ]);





        //  Domain 2
        Domain_Keys::create([
            'domain_id' => $d2->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 6,
            'computedScore' => 0
        ]);
        Domain_Keys::create([
            'domain_id' => $d2->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 7,
            'computedScore' => 6
        ]);
        Domain_Keys::create([
            'domain_id' => $d2->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 8,
            'computedScore' => 6
        ]);
        Domain_Keys::create([
            'domain_id' => $d2->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 9,
            'computedScore' => 13
        ]);
        Domain_Keys::create([
            'domain_id' => $d2->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 10,
            'computedScore' => 19
        ]);
        Domain_Keys::create([
            'domain_id' => $d2->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 11,
            'computedScore' => 19
        ]);
        Domain_Keys::create([
            'domain_id' => $d2->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 12,
            'computedScore' => 25
        ]);
        Domain_Keys::create([
            'domain_id' => $d2->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 13,
            'computedScore' => 31
        ]);
        Domain_Keys::create([
            'domain_id' => $d2->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 14,
            'computedScore' => 31
        ]);
        Domain_Keys::create([
            'domain_id' => $d2->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 15,
            'computedScore' => 38
        ]);
        Domain_Keys::create([
            'domain_id' => $d2->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 16,
            'computedScore' => 44
        ]);
        Domain_Keys::create([
            'domain_id' => $d2->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 17,
            'computedScore' => 44
        ]);
        Domain_Keys::create([
            'domain_id' => $d2->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 18,
            'computedScore' => 50
        ]);
        Domain_Keys::create([
            'domain_id' => $d2->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 19,
            'computedScore' => 56
        ]);
        Domain_Keys::create([
            'domain_id' => $d2->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 20,
            'computedScore' => 56
        ]);
        Domain_Keys::create([
            'domain_id' => $d2->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 21,
            'computedScore' => 63
        ]);
        Domain_Keys::create([
            'domain_id' => $d2->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 22,
            'computedScore' => 69
        ]);
        Domain_Keys::create([
            'domain_id' => $d2->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 23,
            'computedScore' => 69
        ]);
        Domain_Keys::create([
            'domain_id' => $d2->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 24,
            'computedScore' => 75
        ]);
        Domain_Keys::create([
            'domain_id' => $d2->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 25,
            'computedScore' => 81
        ]);
        Domain_Keys::create([
            'domain_id' => $d2->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 26,
            'computedScore' => 81
        ]);
        Domain_Keys::create([
            'domain_id' => $d2->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 27,
            'computedScore' => 88
        ]);
        Domain_Keys::create([
            'domain_id' => $d2->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 28,
            'computedScore' => 94
        ]);
        Domain_Keys::create([
            'domain_id' => $d2->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 29,
            'computedScore' => 94
        ]);
        Domain_Keys::create([
            'domain_id' => $d2->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 30,
            'computedScore' => 100
        ]);


        //  Domain 3
        Domain_Keys::create([
            'domain_id' => $d3->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 3,
            'computedScore' => 0
        ]);
        Domain_Keys::create([
            'domain_id' => $d3->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 4,
            'computedScore' => 6
        ]);
        Domain_Keys::create([
            'domain_id' => $d3->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 5,
            'computedScore' => 19
        ]);
        Domain_Keys::create([
            'domain_id' => $d3->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 6,
            'computedScore' => 25
        ]);
        Domain_Keys::create([
            'domain_id' => $d3->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 7,
            'computedScore' => 31
        ]);
        Domain_Keys::create([
            'domain_id' => $d3->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 8,
            'computedScore' => 44
        ]);
        Domain_Keys::create([
            'domain_id' => $d3->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 9,
            'computedScore' => 50
        ]);
        Domain_Keys::create([
            'domain_id' => $d3->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 10,
            'computedScore' => 56
        ]);
        Domain_Keys::create([
            'domain_id' => $d3->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 11,
            'computedScore' => 69
        ]);
        Domain_Keys::create([
            'domain_id' => $d3->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 12,
            'computedScore' => 75
        ]);
        Domain_Keys::create([
            'domain_id' => $d3->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 13,
            'computedScore' => 81
        ]);
        Domain_Keys::create([
            'domain_id' => $d3->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 14,
            'computedScore' => 94
        ]);
        Domain_Keys::create([
            'domain_id' => $d3->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 15,
            'computedScore' => 100
        ]);


        //  Domain 4
        Domain_Keys::create([
            'domain_id' => $d4->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 8,
            'computedScore' => 0
        ]);
        Domain_Keys::create([
            'domain_id' => $d4->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 9,
            'computedScore' => 6
        ]);
        Domain_Keys::create([
            'domain_id' => $d4->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 10,
            'computedScore' => 6
        ]);
        Domain_Keys::create([
            'domain_id' => $d4->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 11,
            'computedScore' => 13
        ]);
        Domain_Keys::create([
            'domain_id' => $d4->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 12,
            'computedScore' => 13
        ]);
        Domain_Keys::create([
            'domain_id' => $d4->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 13,
            'computedScore' => 19
        ]);
        Domain_Keys::create([
            'domain_id' => $d4->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 14,
            'computedScore' => 19
        ]);
        Domain_Keys::create([
            'domain_id' => $d4->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 15,
            'computedScore' => 25
        ]);
        Domain_Keys::create([
            'domain_id' => $d4->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 16,
            'computedScore' => 25
        ]);
        Domain_Keys::create([
            'domain_id' => $d4->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 17,
            'computedScore' => 31
        ]);
        Domain_Keys::create([
            'domain_id' => $d4->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 18,
            'computedScore' => 31
        ]);
        Domain_Keys::create([
            'domain_id' => $d4->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 19,
            'computedScore' => 38
        ]);
        Domain_Keys::create([
            'domain_id' => $d4->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 20,
            'computedScore' => 38
        ]);
        Domain_Keys::create([
            'domain_id' => $d4->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 21,
            'computedScore' => 44
        ]);
        Domain_Keys::create([
            'domain_id' => $d4->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 22,
            'computedScore' => 44
        ]);
        Domain_Keys::create([
            'domain_id' => $d4->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 23,
            'computedScore' => 50
        ]);
        Domain_Keys::create([
            'domain_id' => $d4->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 24,
            'computedScore' => 50
        ]);
        Domain_Keys::create([
            'domain_id' => $d4->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 25,
            'computedScore' => 56
        ]);
        Domain_Keys::create([
            'domain_id' => $d4->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 26,
            'computedScore' => 56
        ]);
        Domain_Keys::create([
            'domain_id' => $d4->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 27,
            'computedScore' => 63
        ]);
        Domain_Keys::create([
            'domain_id' => $d4->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 28,
            'computedScore' => 63
        ]);
        Domain_Keys::create([
            'domain_id' => $d4->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 29,
            'computedScore' => 69
        ]);
        Domain_Keys::create([
            'domain_id' => $d4->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 30,
            'computedScore' => 69
        ]);
        Domain_Keys::create([
            'domain_id' => $d4->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 31,
            'computedScore' => 75
        ]);
        Domain_Keys::create([
            'domain_id' => $d4->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 32,
            'computedScore' => 75
        ]);
        Domain_Keys::create([
            'domain_id' => $d4->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 33,
            'computedScore' => 81
        ]);
        Domain_Keys::create([
            'domain_id' => $d4->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 34,
            'computedScore' => 81
        ]);
        Domain_Keys::create([
            'domain_id' => $d4->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 35,
            'computedScore' => 88
        ]);
        Domain_Keys::create([
            'domain_id' => $d4->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 36,
            'computedScore' => 88
        ]);
        Domain_Keys::create([
            'domain_id' => $d4->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 37,
            'computedScore' => 94
        ]);
        Domain_Keys::create([
            'domain_id' => $d4->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 38,
            'computedScore' => 94
        ]);
        Domain_Keys::create([
            'domain_id' => $d4->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 39,
            'computedScore' => 100
        ]);
        Domain_Keys::create([
            'domain_id' => $d4->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 40,
            'computedScore' => 100
        ]);
       
        //  Domain 5 QOL
        Domain_Keys::create([
            'domain_id' => $d5->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 2,
            'computedScore' => 2
        ]);
        Domain_Keys::create([
            'domain_id' => $d5->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 3,
            'computedScore' => 3
        ]);
        Domain_Keys::create([
            'domain_id' => $d5->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 4,
            'computedScore' => 4
        ]);
        Domain_Keys::create([
            'domain_id' => $d5->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 5,
            'computedScore' => 5
        ]);
        Domain_Keys::create([
            'domain_id' => $d5->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 6,
            'computedScore' => 6
        ]);
        Domain_Keys::create([
            'domain_id' => $d5->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 7,
            'computedScore' => 7
        ]);
        Domain_Keys::create([
            'domain_id' => $d5->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 8,
            'computedScore' => 8
        ]);
        Domain_Keys::create([
            'domain_id' => $d5->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 9,
            'computedScore' => 9
        ]);
        Domain_Keys::create([
            'domain_id' => $d5->id,
            'KeyTransformationBase' => 100,
            'rawScore' => 10,
            'computedScore' => 10
        ]);
       

        FormField::create([
            'form_id' => $form->id,
            'sequence' => 0,
            'section' => '1',
            'fieldName' => 'About You',
            'fieldDescription' => 'Before you begin we would like to ask you to answer a few general questions about yourself',
            'fieldControl' => 'div',
            'fieldType' => 'text description',
            'user_id' => $user->id
        ]);
        FormField::create([
            'form_id' => $form->id,
            'sequence' => 1,
            'section' => '1',
            'fieldName' => 'What is your gender?',
            'fieldDescription' => '',
            'fieldControl' => 'radiobutton',
            'fieldType' => 'Male,Female',
            'user_id' => $user->id
        ]);
        FormField::create([
            'form_id' => $form->id,
            'sequence' => 2,
            'section' => '1',
            'fieldName' => 'What is you date of birth?',
            'fieldDescription' => '',
            'fieldControl' => 'Textbox',
            'fieldType' => 'Date',
            'user_id' => $user->id
        ]);
        FormField::create([
            'form_id' => $form->id,
            'sequence' => 3,
            'section' => '1',
            'fieldName' => 'What is the highest education you received?',
            'fieldDescription' => '',
            'fieldControl' => 'radiobutton',
            'fieldType' => 'None At all,Primary school,Secondary school,Tertiary',
            
            'user_id' => $user->id
        ]);
        FormField::create([
            'form_id' => $form->id,
            'sequence' => 4,
            'section' => '1',
            'fieldName' => 'What is your marital status?',
            'fieldDescription' => '',
            'fieldControl' => 'radiobutton',
            'fieldType' => 'Single,Married,Living as married,Separated,Divorced,Widowed',
            
            'user_id' => $user->id
        ]);
        FormField::create([
            'form_id' => $form->id,
            'sequence' => 5,
            'section' => '1',
            'fieldName' => 'Are you currently ill?',
            'fieldDescription' => '',
            'fieldControl' => 'radiobutton',
            'fieldType' => 'Yes,No',
            
            'user_id' => $user->id
        ]);
        FormField::create([
            'form_id' => $form->id,
            'sequence' => 6,
            'section' => '1',
            'fieldName' => 'If something is wrong with your health what do you think it is?',
            'fieldDescription' => '',
            'fieldControl' => 'Textarea',
            'fieldType' => 'long text',
            
            'user_id' => $user->id
        ]);
        FormField::create([
            'form_id' => $form->id,
            'sequence' => 7,
            'section' => '2',
            'fieldName' => 'Instructions',
            'fieldDescription' => 'This assessment asks how you feel about your quality of life, health, or other areas of your life. Please answer all the questions. If you are unsure about which response to give to a question, please choose the one that appears most appropriate. This can often be your first response.\n
            Please keep in mind your standards, hopes, pleasures and concerns. We ask that you think about your life in the last two weeks. For example, thinking about the last two weeks, a question might ask:',
            'user_id' => $user->id,
            'fieldControl' => 'ins'
        ]);
        FormField::create([
            'form_id' => $form->id,
            'sequence' => 8,
            'section' => '3',
            'fieldName' => 'Instructions',
            'fieldDescription' => 'Please read each question, assess your feelings, and circle the number on the scale that gives the best answer for you for each question.',
            'user_id' => $user->id,
            'fieldControl' => 'ins'
        ]);
        FormField::create([
            'form_id' => $form->id,
            'sequence' => 9,
            'section' => '3',
            'fieldName' => 'How would you rate your quality of life?',
            'fieldDescription' => '',
            'fieldHelp' => '',
            'fieldControl' => 'scale5',
            'fieldType' => 'Very Poor,Poor,Neither poor nor good,Good,Very good',
            'valOperation' => '+',
            'domain_id' => $d5->id,
            'user_id' => $user->id
        ]);
        FormField::create([
            'form_id' => $form->id,
            'sequence' => 10,
            'section' => '3',
            'fieldName' => 'How satisfied are you with your health?',
            'fieldDescription' => '',
            'fieldHelp' => '',
            'fieldControl' => 'scale5', 
            'fieldType' => 'Very dissatisfied,Dissatisfied,Neither satisfied nor dissatisfied,Satisfied,Very satisfied',
            'valOperation' => '+',
            'domain_id' => $d5->id,
            'user_id' => $user->id
        ]);


        FormField::create([
            'form_id' => $form->id,
            'sequence' => 11,
            'section' => '3',
            'fieldName' => 'Instructions',
            'fieldDescription' => 'The following questions ask about <b>how much</b> you have experienced certain things in the last two weeks.',
            'user_id' => $user->id,
            'fieldControl' => 'ins'
        ]);

        FormField::create([
            'form_id' => $form->id,
            'sequence' => 12,
            'section' => '3',
            'fieldName' => 'To what extent do you feel that physical pain prevents you from doing what you need to do?',
            'fieldDescription' => '',
            'fieldHelp' => '',
            'fieldControl' => 'scale5', 
            'fieldType' => 'Not at all,A little,A moderate amount,Very much,An extreme amount',
            'valOperation' => '-',
            'domain_id' => $d1->id,
            'user_id' => $user->id
        ]);
        FormField::create([
            'form_id' => $form->id,
            'sequence' => 13,
            'section' => '3',
            'fieldName' => 'How much do you need any medical treatment to function in your daily life?',
            'fieldDescription' => '',
            'fieldHelp' => '',
            'fieldControl' => 'scale5', 
            'fieldType' => 'Not at all,A little,A moderate amount,Very much,An extreme amount',
            'valOperation' => '-',
            'domain_id' => $d1->id,
            'user_id' => $user->id
        ]);
        FormField::create([
            'form_id' => $form->id,
            'sequence' => 14,
            'section' => '3',
            'fieldName' => 'How much do you enjoy life?',
            'fieldDescription' => '',
            'fieldHelp' => '',
            'fieldControl' => 'scale5',  
            'fieldType' => 'Not at all,A little,A moderate amount,Very much,An extreme amount',
            'valOperation' => '+',
            'domain_id' => $d2->id,
            'user_id' => $user->id
        ]);
        FormField::create([
            'form_id' => $form->id,
            'sequence' => 15,
            'section' => '3',
            'fieldName' => 'To what extent do you feel your life to be meaningful?',
            'fieldDescription' => '',
            'fieldHelp' => '',
            'fieldControl' => 'scale5', 
            'fieldType' => 'Not at all,A little,A moderate amount,Very much,An extreme amount',
            'valOperation' => '+',
            'domain_id' => $d2->id,
            'user_id' => $user->id
        ]);
        FormField::create([
            'form_id' => $form->id,
            'sequence' => 16,
            'section' => '3',
            'fieldName' => 'How well are you able to concentrate?',
            'fieldDescription' => '',
            'fieldHelp' => '',
            'fieldControl' => 'scale5',  
            'fieldType' => 'Not at all,A little,A moderate amount,Very much,Extremely',
            'valOperation' => '+',
            'domain_id' => $d2->id,
            'user_id' => $user->id
        ]);
        FormField::create([
            'form_id' => $form->id,
            'sequence' => 17,
            'section' => '3',
            'fieldName' => 'How safe do you feel in your daily life?',
            'fieldDescription' => '',
            'fieldHelp' => '',
            'fieldControl' => 'scale5', 
            'fieldType' => 'Not at all,A little,A moderate amount,Very much,Extremely',
            'valOperation' => '+',
            'domain_id' => $d4->id,
            'user_id' => $user->id
        ]);
        FormField::create([
            'form_id' => $form->id,
            'sequence' => 18,
            'section' => '3',
            'fieldName' => 'How healthy is your physical environment?',
            'fieldDescription' => '',
            'fieldHelp' => '',
            'fieldControl' => 'scale5', 
            'fieldType' => 'Not at all,A little,A moderate amount,Very much,Extremely',
            'valOperation' => '+',
            'domain_id' => $d4->id,
            'user_id' => $user->id
        ]);

        FormField::create([
            'form_id' => $form->id,
            'sequence' => 19,
            'section' => '4',
            'fieldName' => 'Instructions',
            'fieldDescription' => 'The following questions ask about <b>how completely</b> you experience or were able to do certain things in the last two weeks.',
            'user_id' => $user->id,
            'fieldControl' => 'ins'
        ]);

        FormField::create([
            'form_id' => $form->id,
            'sequence' => 20,
            'section' => '4',
            'fieldName' => 'Do you have enough energy for everyday life?',
            'fieldDescription' => '',
            'fieldHelp' => '',
            'fieldControl' => 'scale5', 
            'fieldType' => 'Not at all,A little,Moderately,Mostly,Completely',
            'valOperation' => '+',
            'domain_id' => $d1->id,
            'user_id' => $user->id
        ]);
        FormField::create([
            'form_id' => $form->id,
            'sequence' => 21,
            'section' => '4',
            'fieldName' => 'Are you able to accept your bodily appearance?',
            'fieldDescription' => '',
            'fieldHelp' => '',
            'fieldControl' => 'scale5',
            'fieldType' => 'Not at all,A little,Moderately,Mostly,Completely',
            'valOperation' => '+',
            'domain_id' => $d2->id, 
            'user_id' => $user->id
        ]);
        FormField::create([
            'form_id' => $form->id,
            'sequence' => 22,
            'section' => '4',
            'fieldName' => 'Have you enough money to meet your needs?',
            'fieldDescription' => '',
            'fieldHelp' => '',
            'fieldControl' => 'scale5', 
            'fieldType' => 'Not at all,A little,Moderately,Mostly,Completely',
            'valOperation' => '+',
            'domain_id' => $d4->id,
            'user_id' => $user->id
        ]);
        FormField::create([
            'form_id' => $form->id,
            'sequence' => 23,
            'section' => '4',
            'fieldName' => 'How available to you is the information that you need in your day-to-day life?',
            'fieldDescription' => '',
            'fieldHelp' => '',
            'fieldControl' => 'scale5', 
            'fieldType' => 'Not at all,A little,Moderately,Mostly,Completely',
            'valOperation' => '+',
            'domain_id' => $d4->id,
            'user_id' => $user->id
        ]);
        FormField::create([
            'form_id' => $form->id,
            'sequence' => 24,
            'section' => '4',
            'fieldName' => 'To what extent do you have the opportunity for leisure activities?',
            'fieldDescription' => '',
            'fieldHelp' => '',
            'fieldControl' => 'scale5', 
            'fieldType' => 'Not at all,A little,Moderately,Mostly,Completely',
            'valOperation' => '+',
            'domain_id' => $d4->id,
            'user_id' => $user->id
        ]);
        FormField::create([
            'form_id' => $form->id,
            'sequence' => 25,
            'section' => '4',
            'fieldName' => 'How well are you able to get around?',
            'fieldDescription' => '',
            'fieldHelp' => '',
            'fieldControl' => 'scale5', 
            'fieldType' => 'Very poor,Poor,Neither poor nor good,Good,Very good',
            'valOperation' => '+',
            'domain_id' => $d1->id,
            'user_id' => $user->id
        ]);

        FormField::create([
            'form_id' => $form->id,
            'sequence' => 26,
            'section' => '5',
            'fieldName' => 'Instructions',
            'fieldDescription' => 'The following questions ask you to say how <b>good</b> or <b>satisfied</b> you have felt about various aspects of your life over the last two weeks.',
            'user_id' => $user->id,
            'fieldControl' => 'ins'
        ]);

        FormField::create([
            'form_id' => $form->id,
            'sequence' => 27,
            'section' => '5',
            'fieldName' => 'How satisfied are you with your sleep?',
            'fieldDescription' => '',
            'fieldHelp' => '',
            'fieldControl' => 'scale5', 
            'fieldType' => 'Very dissatisfied,Dissatisfied,Neither satisfied nor dissatisfied,Satisfied,Very satisfied',
            'valOperation' => '+',
            'domain_id' => $d1->id,
            'user_id' => $user->id
        ]);
        FormField::create([
            'form_id' => $form->id,
            'sequence' => 28,
            'section' => '5',
            'fieldName' => 'How satisfied are you with your ability to perform your daily living activities?',
            'fieldDescription' => '',
            'fieldHelp' => '',
            'fieldControl' => 'scale5', 
            'fieldType' => 'Very dissatisfied,Dissatisfied,Neither satisfied nor dissatisfied,Satisfied,Very satisfied',
            'valOperation' => '+',
            'domain_id' => $d1->id,
            'user_id' => $user->id
        ]);
        FormField::create([
            'form_id' => $form->id,
            'sequence' => 29,
            'section' => '5',
            'fieldName' => 'How satisfied are you with your capacity for work?',
            'fieldDescription' => '',
            'fieldHelp' => '',
            'fieldControl' => 'scale5', 
            'fieldType' => 'Very dissatisfied,Dissatisfied,Neither satisfied nor dissatisfied,Satisfied,Very satisfied',
            'valOperation' => '+',
            'domain_id' => $d1->id,
            'user_id' => $user->id
        ]);
        FormField::create([
            'form_id' => $form->id,
            'sequence' => 30,
            'section' => '5',
            'fieldName' => 'How satisfied are you with yourself?',
            'fieldDescription' => '',
            'fieldHelp' => '',
            'fieldControl' => 'scale5', 
            'fieldType' => 'Very dissatisfied,Dissatisfied,Neither satisfied nor dissatisfied,Satisfied,Very satisfied',
            'valOperation' => '+',
            'domain_id' => $d2->id,
            'user_id' => $user->id
        ]);
        FormField::create([
            'form_id' => $form->id,
            'sequence' => 31,
            'section' => '5',
            'fieldName' => 'How satisfied are you with your personal relationships?',
            'fieldDescription' => '',
            'fieldHelp' => '',
            'fieldControl' => 'scale5', 
            'fieldType' => 'Very dissatisfied,Dissatisfied,Neither satisfied nor dissatisfied,Satisfied,Very satisfied',
            'valOperation' => '+',
            'domain_id' => $d3->id,
            'user_id' => $user->id
        ]);
        FormField::create([
            'form_id' => $form->id,
            'sequence' => 32,
            'section' => '5',
            'fieldName' => 'How satisfied are you with your sex life?',
            'fieldDescription' => '',
            'fieldHelp' => '',
            'fieldControl' => 'scale5',
            'fieldType' => 'Very dissatisfied,Dissatisfied,Neither satisfied nor dissatisfied,Satisfied,Very satisfied',
            'valOperation' => '+',
            'domain_id' => $d3->id, 
            'user_id' => $user->id
        ]);
        FormField::create([
            'form_id' => $form->id,
            'sequence' => 33,
            'section' => '5',
            'fieldName' => 'How satisfied are you with the support you get from your friends?',
            'fieldDescription' => '',
            'fieldHelp' => '',
            'fieldControl' => 'scale5', 
            'fieldType' => 'Very dissatisfied,Dissatisfied,Neither satisfied nor dissatisfied,Satisfied,Very satisfied',
            'valOperation' => '+',
            'domain_id' => $d3->id,
            'user_id' => $user->id
        ]);
        FormField::create([
            'form_id' => $form->id,
            'sequence' => 34,
            'section' => '5',
            'fieldName' => 'How satisfied are you with the conditions of your living place?',
            'fieldDescription' => '',
            'fieldHelp' => '',
            'fieldControl' => 'scale5',
            'fieldType' => 'Very dissatisfied,Dissatisfied,Neither satisfied nor dissatisfied,Satisfied,Very satisfied',
            'valOperation' => '+',
            'domain_id' => $d4->id, 
            'user_id' => $user->id
        ]);
        FormField::create([
            'form_id' => $form->id,
            'sequence' => 35,
            'section' => '5',
            'fieldName' => 'How satisfied are you with your access to health services?',
            'fieldDescription' => '',
            'fieldHelp' => '',
            'fieldControl' => 'scale5', 
            'fieldType' => 'Very dissatisfied,Dissatisfied,Neither satisfied nor dissatisfied,Satisfied,Very satisfied',
            'valOperation' => '+',
            'domain_id' => $d4->id,
            'user_id' => $user->id
        ]);
        FormField::create([
            'form_id' => $form->id,
            'sequence' => 36,
            'section' => '5',
            'fieldName' => 'How satisfied are you with your mode of transportation?',
            'fieldDescription' => '',
            'fieldHelp' => '',
            'fieldControl' => 'scale5', 
            'fieldType' => 'Very dissatisfied,Dissatisfied,Neither satisfied nor dissatisfied,Satisfied,Very satisfied',
            'valOperation' => '+',
            'domain_id' => $d4->id,
            'user_id' => $user->id
        ]);

        FormField::create([
            'form_id' => $form->id,
            'sequence' => 37,
            'section' => '5',
            'fieldName' => 'Instructions',
            'fieldDescription' => 'The follow question refers to <b>how often</b> you have felt or experienced certain things in the last two weeks.',
            'user_id' => $user->id,
            'fieldControl' => 'ins'
        ]);

        FormField::create([
            'form_id' => $form->id,
            'sequence' => 38,
            'section' => '5',
            'fieldName' => 'How often do you have negative feelings, such as blue mood, despair, anxiety, depression?',
            'fieldDescription' => '',
            'fieldHelp' => '',
            'fieldControl' => 'scale5', 
            'fieldType' => 'Never,Seldom,Quite often,Very often,Always',
            'valOperation' => '-',
            'domain_id' => $d2->id,
            'user_id' => $user->id
        ]);
        
        
        
    }
}
