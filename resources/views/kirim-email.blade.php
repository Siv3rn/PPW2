@include('layouts.app')

<div class="row  justify-content-center">
    <h3 class="text-center my-2"> Tutorial Queue Laravel</h3>
    <div class="col-md-4 p-4">
        @if (session('status'))
            <div class="alert alert-primary" role="alert">
                {{session('status')}}
            </div>
        @endif
        
        <form action="{{ route('post-email') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-input" name="name" id="name" placeholder="Nama">
            </div>
            <div class="form-group my-3">
                <label for="email" >Email</label>
                <input type="text" class="form-input" name="email" id="email" placeholder="Email Tujuan">
            </div>
            <div class="form-group my3">
                <label for="name">Body Deskripsi</label>
                <textarea name="body" id="" cols="30" rows="10">
                    
                    
                </textarea>
                
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Kirim Email</button>
            </div>
        </form>
    </div>
     
</div>
