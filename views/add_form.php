<form method="POST" action="<?= site_url(array('dashboard','article','add'))?>">
    <div class="input-group" style="margin-bottom:5px;">
        <span class="input-group-addon">Name</span>
        <input name="name" class="form-control" placeholder="Eg: Tendoo CMS" value="" type="text">
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea class="form-control" rows="3" placeholder="Eg: The most powerful CMS for eCommerce designing" name="description"></textarea>
    </div>

    <div class="input-group" style="margin-bottom:5px;">
        <span class="input-group-addon">Price</span>
        <input name="price" class="form-control" placeholder="Article price" value="" type="text">
    </div>
    <div class="form-group">
        <div class="input-group">
            <input class="btn btn-sm btn-primary" value="Save" type="submit">
        </div>
    </div>
</form>