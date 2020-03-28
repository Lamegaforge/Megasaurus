<div>
    <form class="mb-4 mb-lg-0">
        <div class="form-group">
            <input type='hidden' wire:model="clip">
            <textarea wire:model="content" class="form-control" rows="5"></textarea>
            <small class="form-text text-muted">Enter your comment in the textarea. Maximum 250 characters.</small>
            @error('error')
                <small class="form-text text-error">Enter your comment in the textarea. Maximum 250 characters.</small>
            @enderror
        </div>
        <button wire:click="submit" type="button" class="btn btn-primary">Submit</button>
    </form>
</div>