{include file="Header.tpl"}

<div class='container'>
    <h2>New movie</h2>
    <form action='addMovie' method='POST' enctype="multipart/form-data">

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input required name="title" type="text" class="form-control" >
        </div>

        <div class="mb-3">
            <label for="calification" class="form-label">Calification</label>
            <select required name='calification' class="form-select">
                <option value={1}>1</option>
                <option value={2}>2</option>
                <option value={3}>3</option>
                <option value={4}>4</option>
                <option value={5}>5</option>
            </select>
        </div>

        

        <div class="mb-3">
            <label for="director" class="form-label">Director</label>
            <input required name="director" type="text" class="form-control" >
        </div>

        <div class="mb-3">
            <label for="year" class="form-label">Year</label>
            <input required name="year" type="number" class="form-control" >
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input required name="description" type="text" class="form-control" >
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select required name='category' class="form-select">
            {foreach from = $categories item = $cat}
                <option value={$cat->id}</option>{$cat->category}</option>
            {/foreach}
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

{include file="Footer.tpl"}