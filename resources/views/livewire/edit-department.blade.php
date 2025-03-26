<div class="p-6 max-w-2xl mx-auto bg-gray-800 rounded-lg shadow-lg">
    <h2 class="text-2xl text-gray-200 font-semibold mb-4">Edit Department</h2>

    <form wire:submit.prevent="update">
        <div class="mb-4">
        <select id="dept_name" wire:model="dept_name" class="w-full p-2 rounded bg-gray-900 text-gray-200 border border-gray-700 focus:outline-none focus:ring focus:border-blue-500 appearance-none">
            <option value="">-- Select Department --</option>
            @foreach ($departments as $name => $collegeId)
                <option value="{{ $name }}">{{ $name }}</option> <!-- Ensure correct value & label -->
            @endforeach
        </select>
        </div>

        <div class="mb-4">
            <label for="dept_code" class="block text-sm text-gray-300">Department Code</label>
            <input type="text" id="dept_code" wire:model="dept_code" 
                   class="w-full p-2 rounded bg-gray-900 text-gray-200 border border-gray-700 focus:outline-none focus:ring focus:border-blue-500">
            @error('dept_code') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="college_id" class="block text-sm text-gray-300">College ID</label>
            <input type="text" id="college_id" wire:model="college_id" readonly
                   class="w-full p-2 rounded bg-gray-900 text-gray-400 border border-gray-700 focus:outline-none focus:ring focus:border-blue-500">
        </div>

        <div class="mb-4">
            <label for="isActive" class="block text-sm text-gray-300">Status</label>
            <div class="relative">
                <select id="isActive" wire:model="is_active" 
                        class="w-full p-2 rounded bg-gray-900 text-gray-200 border border-gray-700 focus:outline-none focus:ring focus:border-blue-500 appearance-none">
                    <option value="1">✅ Active</option>
                    <option value="0">❌ Inactive</option>
                </select>
                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                    🔽
                </div>
            </div>
            @error('is_active') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="flex justify-end">
            <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 focus:outline-none focus:ring">
                Update
            </button>
        </div>
    </form>
</div>
