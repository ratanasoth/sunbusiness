<div class='row'>
    <div class="col-sm-5">
        <div class="table-caption">
            Menu List
        </div>
        
    </div>
    <div class="col-sm-4">
        <form class="form-inline" action="<?php echo base_url('menu/filter'); ?>" method="post">
            <label>Filter Menu by</label>
                
            <select name="type" class="form-control">
                <option value="all">-- All --</option>
                <option value="main">Main Menu</option>
                <option value="sub">Sub Menu</option>
            </select>
            <input type="submit" class="btn btn-info btn-sm" value=" Search " />
        </form>
    </div>
        

    <div class="col-sm-3">
        
            <a href="<?php echo base_url('menu/newmenu'); ?>" class="btn btn-success btn-xs pull-right"><i class="glyphicon glyphicon-plus"></i> Add New</a>
    </div>
</div>
<hr class="hr" />
<div class="row">
    <div class="col-sm-12">
        <table class="tbl">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Menu Name</th>
                    <th>URL</th>
                    <th>Menu Type</th>
                    <th>Parent</th>
                    <th>Order</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($menus as $menu){ ?>
                <tr>
                    <td><?php echo $menu->id; ?></td>
                    <td><?php echo $menu->name; ?></td>
                    <td><?php echo $menu->url; ?></td>
                    <td><?php echo $menu->type; ?></td>
                    <td><?php echo $menu->parentid; ?></td>
                    <td><?php echo $menu->orderno; ?></td>
                    <td>
                         <a href='<?php echo base_url('menu/delete/'.$menu->id);?>' title="Delete" onclick="return confirm('Do you want to delete it?')"><i class="glyphicon glyphicon-remove text-danger"></i></a>
                        &nbsp;&nbsp;
                        <a href="<?php echo base_url('menu/editmenu/'.$menu->id); ?>" title='Edit'><i class="glyphicon glyphicon-edit"></i></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>