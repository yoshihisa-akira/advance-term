<form class="Form" action="/keep" method="post" enctype='multipart/form-data'>
    @csrf
    <input type="file" name="image" accept="image/png, image/jpeg" />
    <button>登録</button>
</form>