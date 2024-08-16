<?php

namespace App\Livewire;

use App\Models\City;
use App\Models\District;
use App\Models\State;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;

class Form extends Component
{
    use WithFileUploads;
    public $step = 1;
    public $provinces = [];
    public $districts = [];
    public $municipalities = [];
    public $form = [
        'first_name' => '',
        'middle_name' => '',
        'last_name' => '',
        'dob' => '',
        'gender' => '',
        'ethnic_group' => '',
        'province' => '',
        'district' => '',
        'municipality' => '',
        'address' => '',
        'email' => '',
        'phone' => '',
        'fathers_name' => '',
        'father_occupation' => '',
        'father_number' => '',
        'mothers_name' => '',
        'mother_occupation' => '',
        'mother_number' => '',
        'college_name' => '',
        'percentage' => '',
        'notes'=>'',
        'image' => '',
        'document' => '',
    ];

    public function mount()
    {
        $this->provinces = State::all();
    }

    public function updatedFormProvince($provinceId)
    {
        $this->districts = District::where('state_id', $provinceId)->get();
        $this->form['district'] = '';
        $this->form['municipality'] = '';
        $this->municipalities = collect(); // Clear municipalities
    }

    public function updatedFormDistrict($districtId)
    {
        $this->municipalities = City::where('district_id', $districtId)->get();
        $this->form['municipality'] = ''; // Reset municipality
    }

    public function nextStep()
    {
        $this->validate($this->getRules());
        $this->step++;
    }

    public function previousStep()
    {
        $this->step--;
    }

    public function getRules()
    {
        $rules = [];

        if ($this->step == 1) {
            $rules = [
                'form.first_name' => 'required',
                'form.last_name' => 'required',
                'form.dob' => 'required|date',
                'form.gender' => 'required',
                'form.province' => 'required|exists:states,id',
                'form.district' => 'required|exists:districts,id',
                'form.municipality' => 'required|exists:cities,id',
                'form.address' => 'required|string',
                'form.email' => 'email',
                'form.phone' => 'required|string',
            ];
        } elseif ($this->step == 2) {
            $rules = [
                'form.fathers_name' => 'required',
                'form.father_occupation' => 'required',
                'form.father_number' => 'required',
                'form.mothers_name' => 'required',
                'form.mother_occupation' => 'required',
                'form.mother_number' => 'required',
                'form.college_name' => 'required',
                'form.percentage' => 'required|numeric',

            ];
        } elseif ($this->step == 3) {
            $rules = [
                'form.image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'form.document' => 'required|mimes:pdf,doc,docx|max:2048',
            ];
        }

        return $rules;
    }

    public function submit()
    {
        $this->validate($this->getRules());

        $this->form['image'] = $this->form['image']->store('images');
        $this->form['document'] = $this->form['document']->store('documents');

        DB::table('forms')->insert($this->form);

        $jsonFilePath = storage_path('app/public/form_submission_' . now()->timestamp . '.json');
        file_put_contents($jsonFilePath, json_encode($this->form, JSON_PRETTY_PRINT));

        $this->reset(['form', 'step']);


    }

    public function render()
    {
        return view('livewire.form');
    }
}
