<div class="p-6 max-w-2xl mx-auto bg-gray-800 rounded-lg shadow-lg">
    <h2 class="text-2xl text-gray-200 font-semibold mb-4">Create Department</h2>

    <form wire:submit.prevent="save">
        <!-- Department Name -->
        <div class="mb-4">
    <label for="dept_name" class="block text-sm text-gray-300">Department Name</label>
    <div class="relative">
        <select id="dept_name" wire:model="dept_name" class="w-full p-2 rounded bg-gray-900 text-gray-200 border border-gray-700 focus:outline-none focus:ring focus:border-blue-500 appearance-none">
            <option value="">-- Select Department --</option>
            @foreach ($departments as $name => $collegeId)
                <option value="{{ $name }}">{{ $name }}</option> <!-- Ensure correct value & label -->
            @endforeach
        </select>
        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
            🔽
        </div>
    </div>
    @error('dept_name') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
</div>

<!-- Automatically Show College ID (Read-Only) -->
<div class="mb-4">
    <label for="college_id" class="block text-sm text-gray-300">College ID</label>
    <input type="text" id="college_id" wire:model="college_id" class="w-full p-2 rounded bg-gray-900 text-gray-400 border border-gray-700 focus:outline-none focus:ring focus:border-blue-500" readonly />
</div>

        <!-- Department Code -->
        <div class="mb-4">
            <label for="dept_code" class="block text-sm text-gray-300">Department Code</label>
            <input type="text" id="dept_code" wire:model="dept_code" class="w-full p-2 rounded bg-gray-900 text-gray-200 focus:outline-none focus:ring focus:border-blue-500" />
            @error('dept_code') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
        </div>

        <!-- Is Active -->
        <div class="mb-4">
            <label for="isActive" class="block text-sm text-gray-300">Is Active</label>
            <div class="relative">
                <select id="isActive" wire:model="isActive" class="w-full p-2 rounded bg-gray-900 text-gray-200 border border-gray-700 focus:outline-none focus:ring focus:border-blue-500 appearance-none">
                    <option value="0">Inactive</option>
                    <option value="1">Active</option>
                </select>
                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                    🔽
                </div>
            </div>
            @error('isActive') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
        </div>

        <!-- Submit Button -->
        <div class="flex justify-end">
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 focus:outline-none focus:ring">Create</button>
        </div>
    </form>
</div>
