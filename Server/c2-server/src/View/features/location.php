<?php require_once __DIR__ . "/../header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 page-header d-flex justify-content-between align-items-center">
            <h2 class="page-title"><?= $identifier ?> Known Locations</h2>
            <button class="btn btn-dark" data-toggle="modal" data-target="#locationModal"><i class="fas fa-plus"></i></button>
        </div>>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="content">
                    <div class="canvas-wrapper">
                        <table class="table table-striped">
                            <thead class="success">
                                <tr>
                                    <th>Latitude</th>
                                    <th>Longitude</th>
                                    <th>Altitude</th>
                                    <th>Timestamp</th>
                                </tr>
                            </thead>
                            <tbody class="files-class">
                                <?php if (count($knownLocations) > 0): ?>
                                    <?php foreach ($knownLocations as $location): ?>
                                        <tr>
                                            <td><?= $location->getLatitude(); ?></td>
                                            <td><?= $location->getLongitude(); ?></td>
                                            <td><?= $location->getAltitude(); ?></td>
                                            <td class="text-end"><?= $location->getTimestamp(); ?></td>
                                        </tr>
                                    <?php endforeach ?>
                                <?php else: ?>
                                    <tr class="text-center">
                                        No known locaton
                                    </tr>
                                <?php endif ?>               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="locationModal" tabindex="-1" role="dialog" aria-labelledby="locationModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="location-modal-title" id="locationModalLabel">Location</h5>
          
        </div>
        <div class="modal-body">
          
        </div>
      </div>
    </div>
</div>

<?php require_once __DIR__ . "/../footer.php"; ?>