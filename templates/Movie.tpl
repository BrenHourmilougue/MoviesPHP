{include file = "Header.tpl"}

<div class='main'>


    <div class='container'>

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
                <li class="list-group-item ">{$movie->description}</li>
                {if !isset($smarty.session.USER_ID)}
                <li class="list-group-item ">
                            <a href='edit/{$movie->id}' type='button' class='btn btn-success'>Edit</a>
                            <a href='delete/{$movie->id}' type='button' class='btn btn-danger'>Delete</a>
                </li>        
                {/if}        
            </ul>
        </div>

    </div>

</div>


{include file="footer.tpl"}