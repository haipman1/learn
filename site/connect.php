<?php



try {
    $pdo = new PDO('mysql:host=localhost;dbname=task', 'Eloxez781', 'Slkv12348765');
    echo '<!--
<div class="box_suc-reg" style="position: fixed; bottom: 0; right: 0; z-index: 5;">
                    <div class="alert alert-success alert-dismissible fade show m-5 w-25" id=\'suc-reg\' role="alert">
                        <h4 class="alert-heading">Well done!</h4>
                        <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                        <hr>
                        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
          </div>-->
';


} catch (Exception $e) {
    echo $e->getMessage();
}

//<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
//            <div class="modal-dialog modal-sm">
//                <div class="modal-content">
//                    ...
//                </div>
//            </div>
//        </div>





?>