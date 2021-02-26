<div>
 <div class="container">
 	@if(session()->has('message'))
 	   <div class="alert alert-success">
 	   	  {{session()->get('message')}}
 	   </div>
 	@endif
 	 <form>
    <div class="row mb-2 form-group">
        <div class="col-md-4">
	    <input type="text" wire:model='firstname' placeholder="Fisrtname" class="form-control @if(!$errors->has('firstname') && $firstname != null) {{'is-valid'}} @endif" id="validationServer01" value="Mark" required>
            @error('firstname') <span class="error" style="color: red;">{{ $message }}</span> @enderror
	  </div>
     

        <div class="col-md-4">
            <input wire:model='lastname' class="form-control @if(!$errors->has('lastname') && $lastname != null) {{'is-valid'}} @endif" id="validationServer01" type="text"  placeholder="Lastname">
        @error('lastname') <span class="error" style="color: red;">{{ $message }}</span> @enderror
        </div>

         <div class="col-md-4">
            <input wire:model='email' class="form-control @if(!$errors->has('email') && $email != null) {{'is-valid'}} @endif" id="validationServer01" type="email" name="" placeholder="Email">
        @error('email') <span class="error" style="color: red;">{{ $message }}</span> @enderror
        </div>

      </div>
      <div class="row mb-2 form-group">
          
        <div class="col-md-6">
            <input wire:model='phone' class="form-control @if(!$errors->has('phone') && $phone != null) {{'is-valid'}} @endif" id="validationServer01" type="text" name="" placeholder="Phone">
        @error('phone') <span class="error" style="color: red;">{{ $message }}</span> @enderror
        </div>

        <div class="col-md-6">
            <input wire:model='subject' class="form-control @if(!$errors->has('subject') && $subject != null) {{'is-valid'}} @endif" id="validationServer01" type="text" name="" placeholder="Subject">
        @error('subject') <span class="error" style="color: red;">{{ $message }}</span> @enderror
        </div>

      </div>
      <div class="row form-group">
        <div class="col-md-12">
            <textarea wire:model='content' class="form-control @if(!$errors->has('content') && $content != null) {{'is-valid'}} @endif" id="validationServer01" type="text" name="" placeholder="Message..."></textarea>
        </div>
        @error('content') <span class="error" style="color: red;">{{ $message }}</span> @enderror
      </div>
      <div class="mt-4">
      	  <a wire:click.prevent='storeMessage()' class="btn btn-success" type="button">Envoyer mon message</a>
      </div>
</form>
 </div>

 
</div>
