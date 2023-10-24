<x-app-layout>
    <div class="content-body">
        <div class="row d-flex justify-content-center mt-5 p-3">
            <div class="col-lg-8">
                <div class="card p-3">
                    <div class="card-header">
                        <h4 class="card-title bg-dark text-center p-3" style="border-radius: 50px">ADD NEW User</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="POST" action="{{ route('user.store') }}">
                                @csrf <!-- Add CSRF token field for security -->

                                <div class="input-group mb-3">
                                    <select name="store_id" class="form-control @error('store_id') is-invalid @enderror">
                                        <option value="">-- Select Store --</option>
                                        @foreach($stores as $store)
                                            <option value="{{ $store->id }}" {{ old('store_id') == $store->id ? 'selected' : '' }}>
                                                {{ $store->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="input-group mb-3">
                                    <input type="name" id="name" class="form-control block mt-1 w-full" name="name" required autocomplete="name" placeholder="name">
                                </div>
                                @if ($errors->has('name'))
                                    <div class="text-danger mb-3">{{ $errors->first('password') }}</div>
                                @endif

                                <div class="input-group mb-3">
                                    <input type="email" id="email" class="form-control block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Email">
                                </div>
                                @if ($errors->has('email'))
                                    <div class="text-danger mb-3">{{ $errors->first('email') }}</div>
                                @endif

                                <div class="input-group mb-3">
                                    <input type="text" id="phone_number" class="form-control block mt-1 w-full" name="phone" :value="old('phone_number')" required autofocus placeholder="Phone Number">
                                </div>
                                @if ($errors->has('phone_number'))
                                    <div class="text-danger mb-3">{{ $errors->first('phone_number') }}</div>
                                @endif
                                <div class="input-group mb-3">
                                    <textarea type="text" id="address" class="form-control block mt-1 w-full" name="address" :value="old('address')" required autofocus placeholder="Address"></textarea>
                                </div>
                                @if ($errors->has('phone'))
                                    <div class="text-danger mb-3">{{ $errors->first('phone') }}</div>
                                @endif

                                <div class="input-group mb-3">
                                    <input type="password" id="password" class="form-control block mt-1 w-full" name="password" required autocomplete="new-password" placeholder="Password">
                                </div>
                                @if ($errors->has('password'))
                                    <div class="text-danger mb-3">{{ $errors->first('password') }}</div>
                                @endif



                                <div class="mt-3 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Register</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
