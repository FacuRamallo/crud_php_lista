<?php

echo        "<form class='row g-3' action = '/list' method = 'POST'>
                <div class='col-md-6'>
                    <label for='txtContent' class='form-label'>Input List Elements Here</label>
                    <input type='text' class='form-control' id='txtContent' name='txtContent'require>
                </div>
                <section class='text-left'>
                    <button id='send' type='submit' class='btn btn-primary'>ADD</button>
                </section>
            </form>";