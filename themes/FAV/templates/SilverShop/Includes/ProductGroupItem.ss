<div class="productItem">
    <% if $Image %>
        <a href="$Link" title="" Title=$Title %>
            <img src="$Image.getThumbnail.URL" alt="" />
        </a>
    <% else %>
        <a href="$Link" title="" class="noimage"><!-- no image --></a>
    <% end_if %>
    <h3 class="productTitle"><a href="$Link" title="">$Title</a></h3>
    <% if $Model %><p><strong><%t SilverShop\Page\Product.Model "Model" %>:</strong> $Model.XML</p><% end_if %>
    <div>
        <% include SilverShop\Includes\Price %>
        <% if $View %>
            <div class="view">
                <a href="$Link" title="">
                    <%t SilverShop\Page\Product.View "View Product" %>
                </a>
            </div>
        <% else %>
            <% if $canPurchase %>
            <div class="add">
                <a href="$addLink" title="">
                    <%t SilverShop\Page\Product.AddToCart "Add to Cart" %>
                    <% if $IsInCart %>
                        ($Item.Quantity)
                    <% end_if %>
                </a>
            </div>
            <% end_if %>
        <% end_if %>
    </div>
</div>
