
{include file = "Header.tpl"}

    <div class='container'>
        
        {foreach from = $movies item = $movie}

            {if ({$movie->category_id} === {$category->id})}
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        {$movie -> title}
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{$category->category}</li>
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
            {/if}
        {/foreach}

    </div>

{include file="footer.tpl"}