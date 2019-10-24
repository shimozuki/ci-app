<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>List of Peoples</title>
</head>

<body>

  <div class="container">
    <div class="h3 mt-3">List of Peoples</div>

    <div class="row">
      <div class="col-md-5">
        <form action="<?= base_url('peoples'); ?>" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search keyword.." name="keyword">
            <div class="input-group-append">
              <input class="btn btn-primary" type="submit" name="submit">
            </div>
          </div>
        </form>
      </div>
    </div>

    <div class="row">
      <div class="col-md">
        <h5>Result : <?= $total_rows; ?></h5>
        <table class="table">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php if (empty($peoples)) : ?>
              <tr>
                <td colspan="4">
                  <div class="alert alert-danger" role="alert">
                    data not found!
                  </div>
                </td>
              </tr>
            <?php endif; ?>
            <?php foreach ($peoples as $people) : ?>
              <tr>
                <th><?= ++$start; ?></th>
                <td><?= $people['name']; ?></td>
                <td><?= $people['email']; ?></td>
                <td>
                  <a href="" class="badge badge-warning">detail</a>
                  <a href="" class="badge badge-success">edit</a>
                  <a href="" class="badge badge-danger">delete</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>

        <?php echo $this->pagination->create_links(); ?>

      </div>
    </div>

  </div>

</body>

</html>