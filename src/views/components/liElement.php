<?php

echo    "<li class='list-group-item'>
            <div class='card' id={$li->id}>
                <div class='card-body'>
                    {$li->txtContent}
                </div>
                <div class='d-grid gap-2 d-md-flex justify-content-md-end'>
                    <button class='btn btn-primary me-md-2' type='button'>Button</button>
                    <button class='btn btn-primary' type='button'>Button</button>
                </div>
            </div>
        </li>";