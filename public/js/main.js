function getCatCars($id){
    const input = document.querySelector("#cat_id");
    const form = document.querySelector("#catPro");
    input.value = $id;
    form.submit();

}
function submitForm($id){
    const input = document.querySelector("#car_id");
    const form = document.querySelector("#form");
    input.value=$id;
    form.submit();
}
function deleteForm($id){
    const input = document.querySelector("#delete_car_id");
    const form = document.querySelector("#delete_form");
    input.value=$id;
    form.submit();
}
function deleteOrder($id){
    const input = document.querySelector("#delete_order_id");
    const form = document.querySelector("#delete_form");
    input.value=$id;
    form.submit();
}
function deleteUser($id){
    const input = document.querySelector("#delete_user_id");
    const form = document.querySelector("#delete_form");
    input.value=$id;
    form.submit();
}