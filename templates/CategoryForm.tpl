{include file="Header.tpl"}

<div class='container'>
    <h2>New category</h2>
    <form action='postNewCategory' method='POST' enctype="multipart/form-data">

        <div class="mb-3">
            <label for="category" class="form-label">Title</label>
            <input required name="category" type="text" class="form-control" >
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

{include file="Footer.tpl"}