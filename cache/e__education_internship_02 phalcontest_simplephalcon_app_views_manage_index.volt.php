<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<div class="p-4">

    <div class="bg-danger text-center w-50 mx-auto rounded-lg rounded-lg">
        <ul class="list-unstyled text-light p-1 m-3">
            <li>
                error
            </li>

        </ul>
    </div>

    <div class="bg-success text-center w-50 mx-auto text-light rounded-lg">
        <p class="p-1 m-3">Success</p>
    </div>


    <div class="alert alert-warning w-50 mx-auto text-center rounded-lg">
        <p class="p-1 m-3">Deleted</p>
    </div>

    <div class="text-center w-75 mx-auto p-5 rounded-lg">
        <div>
            <form method="post" action="<?= $this->url->get('admin') ?>">


                <div class="p-4 title-adminpage">Add Homestay</div>

                <div class="grid-contain-admin-form">
                    <div class="admin-form-aside">
                        <div class="form-group px-3"><img src="img/icon-home.png" alt=""></div>

                    </div>
                    <div class="admin-form-bside">
                        <div class="form-group"><input class="rounded px-2" type="text" name="hname"
                                placeholder="Homestay name" /></div>
                        <div class="form-group"><input class="rounded my-2 px-2 mr-2" type="text" name="address"
                                placeholder="Address" /><input class="rounded px-2" type="text" name="city"
                                placeholder="City" /></div>
                        <div class="form-group"><input class="rounded px-2" type="text" name="price"
                                placeholder="Prices (฿)" /></div>
                        <div class="form-group width-speci">
                            <textarea name="desc" class="form-control" id="exampleFormControlTextarea1" rows="3"
                                placeholder="Description"></textarea>
                        </div>
                    </div>

                </div>

                <div class="d-flex justify-content-center">
                    <div class="form-group width-resize"><input class="form-control" type="submit" name="" id=""></div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container row">

    <div class="table col-md-12 d-flex justify-content-center p-4 table-striped text-center">
        <table>
            <tr>
                <th>
                    <div class="p-2 table-title">Homestay name</div>
                </th>
                <th>
                    <div class="p-2 table-title">Prices</div>
                </th>
                <th>
                    <div class="p-2 table-title">Address</div>
                </th>
                <th>
                    <div class="p-2 table-title">Description</div>
                </th>
                <th>
                    <div class="p-2 table-title text-danger">DELETE</div>
                </th>
            </tr>

            <tr>
                <td>
                    <div class="p-2">hname</div>
                </td>
                <td>
                    <div class="p-2">price</div>
                </td>
                <td>
                    <div class="p-2 text-left text-wid">address, city</div>
                </td>
                <td>
                    <div class="p-2 text-left text-wid">description</div>
                </td>
                <td>
                    <div class="p-2">
                        <form method="post" class="delete_form" action="">
                            <input type="hidden" name="_method" value="DELETE" />
                            <button type="submit" class="btn btn-danger">X</button>
                        </form>
                    </div>
                </td>
            </tr>

        </table>
    </div>
</div>