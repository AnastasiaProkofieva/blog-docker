<x-admin.layout title="Tags">
    <form action="{{ route('admin.tags.update', compact('tag')) }}"
          method="post"
          class="col-md-6">
        @csrf
        @method('put')
        <div class="card card-dark">
            <div class="card-header">
                <h3 class="card-title">Edit Tag</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" value="{{ $tag->name }}" class="form-control">
                </div>
            </div>
        </div>
        <x-admin.buttons.save-delete />
    </form>
</x-admin.layout>

<x-admin.modals.delete :model="$tag" />
