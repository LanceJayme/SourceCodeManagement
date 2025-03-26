<div class="bg-gray-900 min-h-screen text-gray-100 flex items-center">
    <div class="w-full max-w-7xl px-6">
        <div class="bg-gray-800 shadow-sm sm:rounded-lg overflow-hidden">
            <div class="p-6">
            <div class="flex justify-end mb-4">
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-600 dark:divide-neutral-700" id="paginated-students">
                        <thead class="bg-gray-700">
                            <tr>
                                <th class="px-6 py-3 text-xs font-medium text-gray-300 uppercase text-start dark:text-neutral-500">Department ID</th>
                                <th class="px-6 py-3 text-xs font-medium text-gray-300 uppercase text-start dark:text-neutral-500">College ID</th>
                                <th class="px-6 py-3 text-xs font-medium text-gray-300 uppercase text-start dark:text-neutral-500">Department Name</th>
                                <th class="px-6 py-3 text-xs font-medium text-gray-300 uppercase text-start dark:text-neutral-500">Department Code</th>
                                <th class="px-6 py-3 text-xs font-medium text-gray-300 uppercase text-end dark:text-neutral-500">Is Active</th>
                                <th class="px-6 py-3 text-xs font-medium text-gray-300 uppercase text-end dark:text-neutral-500">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($departments as $dept)
                                <tr class="odd:bg-gray-800 even:bg-gray-700 hover:bg-gray-700 dark:odd:bg-neutral-800 dark:even:bg-neutral-700 dark:hover:bg-neutral-600">
                                    <td class="px-6 py-4 text-sm font-medium text-gray-200">{{ $dept->id }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-200">{{ $dept->colleges_id }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-200">{{ $dept->name }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-200">{{ $dept->code }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-200">
                                        @if ($dept->is_active)
                                            ✅ Active
                                        @else
                                            ❌ Inactive
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium text-end">
                                    <button onclick="window.location.href='{{ route('edit-department', $dept->id) }}'"
                                            class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600">
                                        Edit
                                    </button>
                                    <button wire:click="deleteDepartment({{ $dept->id }})"
                                            onclick="return confirm('Are you sure you want to delete this department?')"
                                            class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">
                                        Delete
                                    </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
