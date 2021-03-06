<?php require_once 'nav.php'?>
    <div class="container">
        <div class="row">
            <div class="col-md">
                <?php
                if (isset($_SESSION['auth_is_admin']) && $_SESSION['auth_is_admin'] == 1) {?>
                    <button class="btn btn-danger" onclick="location.href='clear-cache.php'">Clear Database Cache</button>
                <?php } ?>
                <table class="table table-striped table-borderless table-responsive">
                    <thead>
                    <tr>
                        <th scope="col">Setting</th>
                        <th scope="col">Value</th>
                        <th scope="col">Current Source</th>
                        <th scope="col">Default</th>
                        <th scope="col">Description</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($GLOBALS['settings_allowlist'] as $key => $value) {
                        if (!$value['hidden']) { ?>
                        <tr>
                            <td><?php echo $key ?></td>
                            <td><?php
                            $setting = setting($key);
                            if (is_bool($setting)) {
                                echo $setting ? "true" : "false";
                            } else if (is_array($setting)) {
                                echo json_encode($setting);
                            } else {
                                echo $setting;
                            }?>
                            </td>
                            <td><?php echo setting_source($key)?></td>
                            <td><?php
                            if (is_bool($value['default'])) {
                                echo $value['default'] ? "true" : "false";
                            } else if (is_array($value['default'])) {
                                echo json_encode($value['default']);
                            } else {
                                echo $value['default'];
                            }?>
                            </td>
                            <td><?php echo $value['description'] ?></td>
                        </tr>
                            <?php
                        }
                    } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php require_once 'footer.php';
