<?php
$page = "plugins-VBAN-Shutdown";
?>
    <div class="col-md-8">
			<h3 class="mb-5">
				Shutdown System
			</h3>
            
            Are you sure?
            <form role="form" action="plugin_action.php" method="get">
                <div class="form-group">
                    <input type="hidden" name="name" value="VBAN-Shutdown" />
                    <input type="hidden" name="args" value="" />
                    <button type="submit" class="btn btn-success">
                        Yes
                    </button>
                    <button type="button" class="btn btn-danger" onclick="location.href='index.php';">
                        No
                    </button>
                </div>
            </form>
		</div>