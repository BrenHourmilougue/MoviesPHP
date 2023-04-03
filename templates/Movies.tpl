{include file = "Header.tpl"}

<div class='main'>

    <a href='newMovie' class="btn btn-primary" style="color:white;font-weight:600;--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; margin-left:7rem; width:150px;">Add a new movie</a>

    <div class='container'>

        {foreach from = $movies item = $movie}
        <div class="card" style="width: 18rem;">
            <div class="card-header">
                {$movie -> title}
            </div>
            <ul class="list-group list-group-flush">
                {foreach from = $categories item = $cat}
                    {if ({$movie->category_id} === {$cat->id})}
                    <li class="list-group-item">{$cat->category}</li>
                    {/if}
                {/foreach}
                <li class="list-group-item">{$movie->year}</li>
                <li class="list-group-item">{$movie->director}</li>
                <li class="list-group-item">{$movie->calification}</li>
                <li class="list-group-item description">{$movie->description}</li>
                <li class="list-group-item description">
                            <a href='details/{$movie->id}' type="button" class="btn btn-info">Details</a>
                            <a href='edit/{$movie->id}' type='button' class='btn btn-success'>Edit</a>
                            <a href='delete/{$movie->id}' type='button' class='btn btn-danger'>Delete</a>
                </li>                
            </ul>
        </div>
        {/foreach}
    </div>

</div>


{include file="Footer.tpl"}