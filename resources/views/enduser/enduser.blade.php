@extends('layouts.main')
@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav class="col-md-2 d-none d-md-block bg-light" style="background-color: #FFFAEC; height: 100vh;">
            <div class="d-flex flex-column align-items-start p-3">
                <h3 class="text-center mt-3" style="color: #333C3C;">Purr'Coffee</h3>
                <a href="#" class="mb-2" style="color: #333C3C;">Home Page</a>
                <a href="#" class="mb-2" style="color: #333C3C;">Menu</a>
                <a href="#" class="mb-2" style="color: #333C3C;">My Orders <span class="badge badge-danger">13</span></a>
                <a href="#" class="mb-2" style="color: #333C3C;">History</a>
                <a href="#" class="mb-2" style="color: #333C3C;">Partners</a>
                <a href="#" class="mb-2" style="color: #333C3C;">Settings</a>
                <a href="#" class="text-danger mb-2">Donate to shelter</a>
                <a href="#" class="mb-2" style="color: #333C3C;">Log out</a>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="col-md-7 ml-sm-auto col-lg-7 px-md-4">
            <div class="d-flex justify-content-between align-items-center mt-3 mb-4">
                <h1 class="h2">Coffee Menu</h1>
                <button class="btn btn-outline-secondary">Filter</button>
            </div>

            <!-- Menu Items -->
            <div class="row">
                <!-- Coffee Item -->
                <div class="col-md-4">
                    <div class="card mb-4" style="border: none;">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Coffee">
                        <div class="card-body">
                            <h5 class="card-title">Cappuccino <span style="color: #FFA16C;">$4.94</span></h5>
                            <p class="card-text">The combination of coffee, milk, and palm sugar makes this drink have a delicious taste.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-outline-secondary">Small</button>
                                    <button class="btn btn-sm btn-outline-secondary">Large</button>
                                </div>
                                <button class="btn btn-sm" style="background-color: #FFA16C; color: white;">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Repeat for other coffee items -->
            </div>
        </main>

        <!-- Cart Section -->
        <aside class="col-md-3 ml-sm-auto col-lg-3 px-md-4">
            <div class="card mt-3">
                <div class="card-header bg-white">
                    <h4>Cart</h4>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Cappuccino</span>
                        <span>$14.94</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Coffee Latte</span>
                        <span>$5.98</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Items</span>
                        <span>$20.92</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Discounts</span>
                        <span>-$3.00</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between" style="color: #FFA16C;">
                        <span>Total</span>
                        <span>$17.92</span>
                    </li>
                </ul>
                <div class="card-body">
                    <button class="btn btn-block" style="background-color: #FFA16C; color: white;">Place an order</button>
                </div>
            </div>
        </aside>
    </div>
</div>

@endsection
