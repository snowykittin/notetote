//confirm delete buttons
function confirmAlbumDeletion(id) {
    buttons = "<input type='button' style='background-color: #cc3333' onclick=window.location.href='confirm-album-delete.php?id=" + id + "' value='  Confirm Delete  ' >";

    document.getElementById("albumDelete").innerHTML = buttons;
}

function confirmUserDeletion(id) {
    buttons = "<input type='button' style='background-color: #cc3333' onclick=window.location.href='confirm-account-delete.php?id=" + id + "' value='  Confirm Delete  ' >";

    document.getElementById("accountDelete").innerHTML = buttons;
}