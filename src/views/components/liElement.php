<?php

echo    "<li class='list-group-item'>
            <div class='card' >
                <div class='card-body'id={$li->id}>
                    {$li->txtContent}
                </div>
                <div class='btn-group' role='group' aria-label=''>
                    <a href='?id={$li->id}' class='btn btn-info'>Modify</a>
                    <a href='?id={$li->id}&action=delete' class='btn btn-danger'>Delete</a>
                </div>
            </div>
        </li>";