<form class="Form" action="/keep" method="post" enctype='multipart/form-data'>
    @csrf
    <input type="file" name="image" accept="image/png, image/jpeg" />
    <button>登録</button>
</form>

<img src="../../storage/app/public/images/688nQMPbpSWLOqlXCmvC7khbqFyrOKzaxT7fBBaQ.jpg" alt="a">
<img src="{{ asset('storage/images/寿司.jpg') }}" alt="a">
<img src="{{ asset('img/カギアイコン.png') }}" alt="" width="20px" height="20px">