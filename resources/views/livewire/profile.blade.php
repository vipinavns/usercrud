<div>
    <title>Profile</title>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        
    </div>
    <div class="row">
        <div class="col-12 col-xl-12">
            @if($showSavedAlert)
            <div class="alert alert-success" role="alert">
                Saved!
            </div>
            @endif
            
            <div class="card card-body border-0 shadow mb-4">
                <h2 class="h5 mb-4">General information</h2>
                <form wire:submit.prevent="save" action="#" method="POST">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="first_name">First Name</label>
                                <input wire:model="user.first_name" class="form-control" id="first_name" type="text"
                                    placeholder="Enter your first name" required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="last_name">Last Name</label>
                                <input wire:model="user.last_name" class="form-control" id="last_name" type="text"
                                    placeholder="Also your last name">
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input wire:model="user.email" class="form-control" id="email" type="email"
                                    placeholder="name@company.com" disabled>
                            </div>
                            @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="gender">Gender</label>
                            <select wire:model="user.gender" class="form-select mb-0" id="gender"
                                aria-label="Gender select example">
                                <option selected>Choose...</option>
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                                <option value="Other">Other</option>
                            </select>
                            @error('user.gender') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <h2 class="h5 my-4">Location</h2>
                    <div class="row">
                        <div class="col-sm-9 mb-3">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input wire:model="user.address" class="form-control" id="address" type="text"
                                    placeholder="Enter your home address">
                            </div>
                            @error('user.address') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-sm-3 mb-3">
                            <div class="form-group">
                                <label for="number">Number</label>
                                <input wire:model="user.number" class="form-control" id="number" type="number"
                                    placeholder="No.">
                            </div>
                            @error('user.number') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 mb-3">
                            <div class="form-group">
                                <label for="city">City</label>
                                <input wire:model="user.city" class="form-control" id="city" type="text"
                                    placeholder="City">
                            </div>
                            @error('user.city') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="zip">ZIP</label>
                                <input wire:model="user.ZIP" class="form-control" id="zip" type="tel" placeholder="ZIP">
                            </div>
                        </div>
                        @error('user.ZIP') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-gray-800 mt-2 animate-up-2">Save All</button>
                    </div>
                </form>
            </div>
        </div>
        {{-- <div class="col-12 col-xl-4">
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="card shadow border-0 text-center p-0">
                        <div wire:ignore.self class="profile-cover rounded-top"
                            data-background="../assets/img/profile-cover.jpg"></div>
                        <div class="card-body pb-5">
                            <img src="../assets/img/team/profile-picture-1.jpg"
                                class="avatar-xl rounded-circle mx-auto mt-n7 mb-4" alt="Neil Portrait">
                            <h4 class="h3">
                                {{  auth()->user()->first_name ? auth()->user()->first_name . ' ' . auth()->user()->last_name : 'User Name'}}
                            </h4>
                            <h5 class="fw-normal">Senior Software Engineer</h5>
                            <p class="text-gray mb-4">New York, USA</p>
                            <a class="btn btn-sm btn-gray-800 d-inline-flex align-items-center me-2" href="#">
                                <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z">
                                    </path>
                                </svg>
                                Connect
                            </a>
                            <a class="btn btn-sm btn-secondary" href="#">Send Message</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</div>
