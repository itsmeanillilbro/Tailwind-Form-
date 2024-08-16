<div>
    <section class="py-1 bg-blueGray-50">
        <div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
            <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                <div class="rounded-t bg-white mb-0 px-6 py-6">
                <div class="w-full flex justify-center mb-6">
    <div class="flex items-center space-x-4">
        <!-- Step 1: Personal Information -->
        <div class="flex items-center">
            <div class="relative">
                <div class="@if ($step > 1) bg-blue-500 text-white @else bg-blue-500  text-blueGray-700 @endif rounded-full h-12 w-12 flex items-center justify-center font-bold text-lg">
                    @if ($step > 1)
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    @else
                        1
                    @endif
                </div>
                @if ($step > 1)
                    <div class="absolute right-0 top-1/2 transform -translate-y-1/2 h-1 w-full "></div>
                @endif
            </div>
            <div class="ml-4 text-lg font-bold uppercase">
                Personal Information
            </div>
        </div>

        <!-- Step 2: Parents & Academics Information -->
        <div class="flex items-center">
            <div class="relative">
                <div class="@if ($step > 2) bg-blue-500 text-white @elseif($step == 2) bg-blue-500 text-white @else bg-gray-200 text-blueGray-700 @endif rounded-full h-12 w-12 flex items-center justify-center font-bold text-lg">
                    @if ($step > 2)
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    @else
                        2
                    @endif
                </div>
                @if ($step > 2)
                    <div class="absolute right-0 top-1/2 transform -translate-y-1/2 h-1 w-full "></div>
                @endif
            </div>
            <div class="ml-4 text-lg font-bold uppercase">
                Parents & Academics Information
            </div>
        </div>

        <!-- Step 3: Documents Required -->
        <div class="flex items-center">
            <div class="@if ($step == 3) bg-blue-500 text-white @else bg-gray-200 text-blueGray-700 @endif rounded-full h-12 w-12 flex items-center justify-center font-bold text-lg">
                3
            </div>
            <div class="ml-4 text-lg font-bold uppercase">
                Documents Required
            </div>
        </div>
    </div>
</div>

                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                    <form wire:submit.prevent="submit">
                        @if ($step == 1)
                            <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">Personal Information</h6>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                                <!-- First Name -->
                                <div class="relative">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        for="first_name">First Name</label>
                                    <input type="text" id="first_name" wire:model="form.first_name"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                    @error('form.first_name') <span class="text-red-500 text-xs">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- Middle Name -->
                                <div class="relative">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        for="middle_name">Middle Name</label>
                                    <input type="text" id="middle_name" wire:model="form.middle_name"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                    @error('form.middle_name') <span class="text-red-500 text-xs">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- Last Name -->
                                <div class="relative">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        for="last_name">Last Name</label>
                                    <input type="text" id="last_name" wire:model="form.last_name"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                    @error('form.last_name') <span class="text-red-500 text-xs">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                                <!-- Date of Birth -->
                                <div class="relative">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="dob">Date
                                        of Birth</label>
                                    <input type="date" id="dob" wire:model="form.dob"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                    @error('form.dob') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                                <!-- Gender -->
                                <div class="relative">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        for="gender">Gender</label>
                                    <select id="gender" wire:model="form.gender"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                        <option value="">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    @error('form.gender') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                                <!-- Address -->
                                <div class="relative">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        for="address">Address</label>
                                    <input type="text" id="address" wire:model="form.address"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                    @error('form.address') <span class="text-red-500 text-xs">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- Email -->
                                <div class="relative">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        for="email">Email</label>
                                    <input type="email" id="email" wire:model="form.email"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                    @error('form.email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                                <!-- Phone -->
                                <div class="relative">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        for="phone">Phone</label>
                                    <input type="text" id="phone" wire:model="form.phone"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                    @error('form.phone') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                                <!-- Province -->
                                <div class="relative">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        for="province">Province</label>
                                    <select id="province" wire:model.live="form.province"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                        <option value="">Select Province</option>
                                        @foreach($provinces as $province)
                                            <option value="{{ $province->id }}">{{ $province->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('form.province') <span class="text-red-500 text-xs">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- District -->
                                <div class="relative">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        for="district">District</label>
                                    <select id="district" wire:model.live="form.district"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                        <option value="">Select District</option>
                                        @foreach($districts as $district)
                                            <option value="{{ $district->id }}">{{ $district->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('form.district') <span class="text-red-500 text-xs">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Municipality -->
                                <div class="relative">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        for="municipality">Municipality</label>
                                    <select id="municipality" wire:model.live="form.municipality"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                        <option value="">Select Municipality</option>
                                        @foreach($municipalities as $municipality)
                                            <option value="{{ $municipality->id }}">{{ $municipality->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('form.municipality') <span class="text-red-500 text-xs">{{ $message }}</span>
                                    @enderror
                                </div>

                        @elseif ($step == 2)
                            <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">Parent Information</h6>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                                <!-- Father's Information -->
                                <div class="relative">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        for="fathers_name">Father's Name</label>
                                    <input type="text" id="fathers_name" wire:model="form.fathers_name"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 @error('form.fathers_name') border-red-500 @enderror">
                                    @error('form.fathers_name') <span class="text-red-500 text-xs">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="relative">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        for="father_occupation">Father's Occupation</label>
                                    <input type="text" id="father_occupation" wire:model="form.father_occupation"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 @error('form.father_occupation') border-red-500 @enderror">
                                    @error('form.father_occupation') <span
                                    class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                                <div class="relative">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        for="father_number">Father's Phone Number</label>
                                    <input type="text" id="father_number" wire:model="form.father_number"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 @error('form.father_number') border-red-500 @enderror">
                                    @error('form.father_number') <span
                                    class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                                <!-- Mother's Information -->
                                <div class="relative">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        for="mothers_name">Mother's Name</label>
                                    <input type="text" id="mothers_name" wire:model="form.mothers_name"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 @error('form.mothers_name') border-red-500 @enderror">
                                    @error('form.mothers_name') <span class="text-red-500 text-xs">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="relative">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        for="mother_occupation">Mother's Occupation</label>
                                    <input type="text" id="mother_occupation" wire:model="form.mother_occupation"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 @error('form.mother_occupation') border-red-500 @enderror">
                                    @error('form.mother_occupation') <span
                                    class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                                <div class="relative">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        for="mother_number">Mother's Phone Number</label>
                                    <input type="text" id="mother_number" wire:model="form.mother_number"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 @error('form.mother_number') border-red-500 @enderror">
                                    @error('form.mother_number') <span
                                    class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                Academic Information</h6>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">

                                <!-- Academic Information -->
                                <div class="relative">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        for="college_name">College Name</label>
                                    <input type="text" id="college_name" wire:model="form.college_name"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 @error('form.college_name') border-red-500 @enderror">
                                    @error('form.college_name') <span class="text-red-500 text-xs">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="relative">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        for="percentage">Grade Percentage</label>
                                    <input type="text" id="percentage" wire:model="form.percentage"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 @error('form.percentage') border-red-500 @enderror">
                                    @error('form.percentage') <span class="text-red-500 text-xs">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                            <div class="relative mb-5">
            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="notes">Notes</label>
            <textarea id="notes" wire:model="form.notes"
                class="border-0 px-3 py-3 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                rows="3"></textarea>
            @error('form.notes') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>
                        @elseif ($step == 3)
                            <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">Documents</h6>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                                <!-- Image Upload -->
                                <div class="relative">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        for="image">Photo</label>
                                    <input type="file" id="image" wire:model="form.image"
                                        class="border-0 px-3 py-3 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                    @error('form.image') <span class="text-red-500 text-xs">{{ $message }}</span>
                                    @enderror

                                    <!-- Image Preview -->
                                    @if ($form['image'])
                                        @if (in_array($form['image']->getClientOriginalExtension(), ['jpg', 'jpeg', 'png', 'gif']))
                                            <div class="mt-4">
                                                <img src="{{ $form['image']->temporaryUrl() }}" alt="Image Preview"
                                                    class="max-w-full h-auto rounded shadow">
                                            </div>
                                        @endif
                                    @endif
                                </div>

                                <!-- Document Upload -->
                                <div class="relative">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        for="document">Academic Document</label>
                                    <input type="file" id="document" wire:model="form.document"
                                        class="border-0 px-3 py-3 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                    @error('form.document') <span class="text-red-500 text-xs">{{ $message }}</span>
                                    @enderror

                                    <!-- Document Preview -->
                                    @if ($form['document'])
                                        @if ($form['document']->getClientOriginalExtension() == 'pdf')
                                            <div class="mt-4">
                                                <embed src="{{ $form['document']->temporaryUrl() }}" type="application/pdf"
                                                    class="w-full h-64 rounded shadow">
                                            </div>
                                        @endif
                                    @endif
                                </div>
                            </div>
                        @endif



</div>
<div class="flex justify-between">
    @if ($step > 1)
        <button type="button" wire:click="previousStep"
            class="bg-gray-300 text-gray-800 py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">
            Go Back
        </button>
    @endif

    @if ($step < 3)
        <div class="ml-auto">
            <button type="button" wire:click="nextStep"
                class="bg-blue-500 text-white py-3 px-5 rounded-lg focus:outline-none focus:shadow-outline">
                Continue
            </button>
        </div>
    @else
        <button type="submit"
            class="bg-green-700 text-white py-3 px-5 rounded-lg focus:outline-none focus:shadow-outline">
            Finish
        </button>
    @endif
</div>


                    </form>
                </div>
            </div>
        </div>
</div>
