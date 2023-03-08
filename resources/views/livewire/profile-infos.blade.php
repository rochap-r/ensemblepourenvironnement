<div>

    <form method="post" wire:submit.prevent='UpdateInfos()'>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label">nom</label>
                    <input type="text" class="form-control" name="name" placeholder="Nom" wire:model='name'>
                    <span class="text-danger">@error('name') {{ $message }} @enderror </span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label">PostNom</label>
                    <input type="text" class="form-control" name="fname" placeholder="postnom" wire:model='fname'>
                    <span class="text-danger">@error('fname') {{ $message }} @enderror </span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label">Prénom</label>
                    <input type="text" class="form-control" name="lname" placeholder="prénom" wire:model='lname'>
                    <span class="text-danger">@error('lname') {{ $message }} @enderror </span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label">Tel</label>
                    <input type="text" class="form-control" name="phone" placeholder="243 992522582" wire:model='phone'>
                    <span class="text-danger">@error('phone') {{ $message }} @enderror </span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="email" disabled="" wire:model='email'>
                    <span class="text-danger">@error('email') {{ $message }} @enderror </span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-label">Votre Sexe</div>
                    <div>
                      <label class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" checked="" value="m" wire:model='gender'>
                        <span class="form-check-label">Masculin</span>
                      </label>
                      <label class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" value="f" wire:model='gender'>
                        <span class="form-check-label">Feminin</span>
                      </label>
                    </div>
                  </div>
            </div>
           
        </div>
        <button class="btn btn-primary text-uppercase" type="submit">Enregistrer les modifications</button>
    </form>

</div>
