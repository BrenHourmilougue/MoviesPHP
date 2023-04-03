{include file="Header.tpl"}

<div class='container'>
    <h2>Edit movie</h2>
    <form action='editMovie/{$movie->id}' method='POST' enctype="multipart/form-data">

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input required name="title" type="text" value="{$movie->title}" class="form-control" >
        </div>

        <div class="mb-3">
            <label for="calification" class="form-label">Calification</label>
            <select required name='calification' class="form-select">
                <option selected value="{$movie->calification}">{$movie->calification}</option>
                <option value={1}>1</option>
                <option value={2}>2</option>
                <option value={3}>3</option>
                <option value={4}>4</option>
                <option value={5}>5</option>
            </select>
        </div>

        

        <div class="mb-3">
            <label for="director" class="form-label">Director</label>
            <input required name="director" type="text" value="{$movie->director}" class="form-control" >
        </div>

        <div class="mb-3">
            <label for="year" class="form-label">Year</label>
            <input required name="year" type="number" value="{$movie->year}" class="form-control" >
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input required name="description" type="text" value="{$movie->description}" class="form-control" >
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select required name='category' class="form-select">
               {foreach from=$categories item=$cat}
                    {if ({$movie->category_id} === {$cat->id})}
                        <option selected value="{$movie->category_id}">{$cat->category}</option>
                    {/if}
               {/foreach}
            {foreach from = $categories item = $cat}
                <option value="{$cat->id}"</option>{$cat->category}</option>
            {/foreach}
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

{include file="Footer.tpl"}