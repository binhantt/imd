
document.addEventListener("DOMContentLoaded", function() {
    var userMenuButton = document.getElementById("user-menu-button");
    var userMenu = document.querySelector(".absolute.right-0");

    userMenu.classList.remove("hidden");

    userMenuButton.addEventListener("click", function() {
        userMenu.classList.toggle("hidden");
    });

    document.addEventListener("click", function(event) {
        var targetElement = event.target;
        if (!userMenu.contains(targetElement) && !userMenuButton.contains(targetElement)) {
            userMenu.classList.add("hidden");
        }
    });
});
$('.delete-button').click(function() {
    $.ajax({
        url: '/admin/dashboard/product-delete/' + $(this).attr('itemid'),
        type: 'DELETE',
        success: function(res) {
            location.reload();
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }

    });
});
$('.button-edit').click(function() {
    $.ajax({
        url: '/admin/dashboard/product-getedit/' + $(this).attr('itemid'),
        type: 'DELETE',
        success: function(res) {
            location.reload();
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }

    });
});
function created(){
$('#name').val("");
$('#gia').val("");
$('#img').val("");
$('#id').val("");
$('#update').val(0);
my_modal_1.showModal() ;

}
function updatedModel(e){
my_modal_1.showModal() ;
const item = JSON.parse(e);
$('#name').val(item.name);
$('#gia').val(item.gia);
$('#img').val(item.img);
$('#id').val(item.id);
$("#update").val(1);
}
$(document).ready(function () {
    
       $('#getPlainTextButton').click(function () {
            // Lấy giá trị văn bản từ CKEditor
            var plainText = CKEDITOR.instances['des'].getData();

            // In giá trị văn bản ra console hoặc thực hiện xử lý khác
            console.log(plainText);
        });
});
CKEDITOR.replace('des', {
    height: '8vw', // Điều chỉnh chiều cao
    width: '100%',   // Điều chỉnh chiều rộng
    // Các tùy chọn khác nếu cần thiết
});
    $(document).ready(function () {
$('#myTable').dataTable({
    "bDestroy": true
}).fnDestroy();
$('#myTable').dataTable({
    "aoColumnDefs": [{
        "bSortable": false,
        "aTargets": ["sorting_disabled"]
    }],
    "bDestroy": true
}).fnDestroy();

});
    $(document).ready(function() {
    $('#myTable').DataTable({
    "pageLength": 5 // Số hàng muốn hiển thị trên mỗi trang
  });
});
$(".delete-button").click(function(){
    var id = $(this).data("id");
    var token = $(this).data("token");
    
    if (id && token) {
        $.ajax({
            url: "product-delete/" + id,
            type: 'DELETE',
            dataType: "JSON",
            data: {
                "_token": token,
            },
            success: function () {
                console.log("Xóa thành công");
                location.reload(); // Tải lại trang
            },
            error: function () {
                console.log("Xóa thất bại");
            }
        });
    } else {
        console.log("ID or token is undefined");
    }
});