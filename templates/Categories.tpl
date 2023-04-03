{include file = "Header.tpl"}

<div class='main'>

    <h3>Categories</h3>

    <a href='newCategory' class="btn btn-primary" style="color:white;font-weight:600;--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; margin-left:7rem; width:200px;">Add a new category</a>

    <div class='container'>
        <ul class="list-group list-group-xxl">
            {foreach from=$categories item=$cat}
            <div>
                <a href='filter/{$cat->id}' type="button" class="list-group-item list-group-item-action">
                    {$cat->category}
                </a>  
                {if !isset($smarty.session.USER_ID)}  
                <div>
                    <a href='editCategory/{$cat->id}' type='button' class='btn btn-success'>Edit</a>
                    <a href='deleteCategory/{$cat->id}' type='button' class='btn btn-danger'>Delete</a>
                </div>
                {/if}
            </div>
                
                    
                
            {/foreach}
        </ul>
    </div>
    
</div>

{include file="footer.tpl"}