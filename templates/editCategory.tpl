{include file="Header.tpl"}

<div class='container'>
    <h2>Edit category</h2>
    <form action='postEditCategory/{$category->id}' method='POST' enctype="multipart/form-data">
        <div class="mb-3">
            <label for="category" class="form-label">Title</label>
            <input required name="category" type="text" value="{$category->category}" class="form-control" >
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

{include file="Footer.tpl"}