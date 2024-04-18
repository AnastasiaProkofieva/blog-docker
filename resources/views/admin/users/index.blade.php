<x-admin.layout title="Tags">
    <x-admin.table
        :collection="$users"
        :names="['id', 'name', 'email', 'role']"
        edit
    />
</x-admin.layout>
