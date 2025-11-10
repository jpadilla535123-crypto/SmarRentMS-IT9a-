<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartRent - Properties Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 font-sans">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-white shadow-lg flex flex-col">
            <!-- Logo -->
            <div class="p-6 border-b border-gray-200">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
                        <i class="fas fa-home text-white text-lg"></i>
                    </div>
                    <div>
                        <h2 class="text-xl font-bold text-gray-900">SmartRent</h2>
                        <p class="text-sm text-gray-500">Management System</p>
                    </div>
                </div>
            </div>

            <!-- Navigation -->
            <nav class="flex-1 p-4">
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('dashboard') }}" class="flex items-center space-x-3 px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-lg transition-colors">
                            <i class="fas fa-th-large w-5"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('properties') }}" class="flex items-center space-x-3 px-4 py-3 bg-blue-50 text-blue-600 rounded-lg border-r-2 border-blue-600">
                            <i class="fas fa-building w-5"></i>
                            <span class="font-medium">Properties</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('smartdevices') }}" class="flex items-center space-x-3 px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-lg transition-colors">
                            <i class="fas fa-mobile-alt w-5"></i>
                            <span>Smart Devices</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('tenants') }}" class="flex items-center space-x-3 px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-lg transition-colors">
                            <i class="fas fa-users w-5"></i>
                            <span>Tenants</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('maintenance') }}" class="flex items-center space-x-3 px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-lg transition-colors">
                            <i class="fas fa-wrench w-5"></i>
                            <span>Maintenance</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('analytics') }}" class="flex items-center space-x-3 px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-lg transition-colors">
                            <i class="fas fa-chart-bar w-5"></i>
                            <span>Analytics</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Profile -->
            <div class="p-4 border-t border-gray-200">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center">
                        <i class="fas fa-user text-gray-600"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-900">John Manager</p>
                        <p class="text-xs text-gray-500">Property Manager</p>
                    </div>
                    <i class="fas fa-cog text-gray-400 ml-auto cursor-pointer hover:text-gray-600 transition-colors"></i>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 overflow-auto">
            <!-- Header -->
            <div class="bg-white border-b border-gray-200 px-8 py-6">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-900">Properties</h1>
                        <p class="text-gray-600 mt-1">Manage your rental properties and track their performance.</p>
                    </div>
                    <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium transition-colors flex items-center space-x-2">
                        <i class="fas fa-plus text-sm"></i>
                        <span>Add Property</span>
                    </button>
                </div>
            </div>

            <!-- Search and Filter Bar -->
            <div class="p-8 pb-4">
                <div class="flex items-center justify-between">
                    <div class="relative flex-1 max-w-md">
                        <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        <input type="text" placeholder="Search properties..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                    <div class="flex items-center space-x-2 ml-4">
                        <i class="fas fa-filter text-gray-400"></i>
                        <select class="border border-gray-300 rounded-lg px-3 py-2 text-gray-700 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option>All Status</option>
                            <option>Active</option>
                            <option>Maintenance</option>
                            <option>Renovation</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Properties Grid -->
            <div class="px-8 pb-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Property Card 1 -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition-shadow">
                        <div class="relative">
                            <img src="https://images.pexels.com/photos/106399/pexels-photo-106399.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Sunset Villa Complex" class="w-full h-48 object-cover">
                            <span class="absolute top-3 right-3 bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs font-medium">Active</span>
                        </div>
                        <div class="p-6">
                            <div class="flex items-start justify-between mb-3">
                                <h3 class="text-lg font-semibold text-gray-900">Sunset Villa Complex</h3>
                                <button class="text-gray-400 hover:text-gray-600">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                            </div>
                            <div class="space-y-2 mb-4">
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-map-marker-alt w-4 mr-2"></i>
                                    <span>123 Ocean Drive, Miami, FL</span>
                                </div>
                                <div class="flex items-center justify-between text-sm text-gray-600">
                                    <div class="flex items-center">
                                        <i class="fas fa-building w-4 mr-2"></i>
                                        <span>24 units</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-users w-4 mr-2"></i>
                                        <span>22 occupied</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mb-4">
                                <div class="text-lg font-semibold text-gray-900">$2,800/month</div>
                                <div class="text-right">
                                    <div class="text-xs text-gray-500">Occupancy</div>
                                    <div class="text-sm font-semibold text-gray-900">92%</div>
                                </div>
                            </div>
                            <div class="flex space-x-2">
                                <button class="flex-1 bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg font-medium transition-colors flex items-center justify-center space-x-2">
                                    <i class="fas fa-eye text-sm"></i>
                                    <span>View</span>
                                </button>
                                <button class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-700 py-2 px-4 rounded-lg font-medium transition-colors flex items-center justify-center space-x-2">
                                    <i class="fas fa-edit text-sm"></i>
                                    <span>Edit</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Property Card 2 -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition-shadow">
                        <div class="relative">
                            <img src="https://images.pexels.com/photos/323780/pexels-photo-323780.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Downtown Lofts" class="w-full h-48 object-cover">
                            <span class="absolute top-3 right-3 bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs font-medium">Active</span>
                        </div>
                        <div class="p-6">
                            <div class="flex items-start justify-between mb-3">
                                <h3 class="text-lg font-semibold text-gray-900">Downtown Lofts</h3>
                                <button class="text-gray-400 hover:text-gray-600">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                            </div>
                            <div class="space-y-2 mb-4">
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-map-marker-alt w-4 mr-2"></i>
                                    <span>456 Main Street, New York, NY</span>
                                </div>
                                <div class="flex items-center justify-between text-sm text-gray-600">
                                    <div class="flex items-center">
                                        <i class="fas fa-building w-4 mr-2"></i>
                                        <span>18 units</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-users w-4 mr-2"></i>
                                        <span>16 occupied</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mb-4">
                                <div class="text-lg font-semibold text-gray-900">$3,200/month</div>
                                <div class="text-right">
                                    <div class="text-xs text-gray-500">Occupancy</div>
                                    <div class="text-sm font-semibold text-gray-900">89%</div>
                                </div>
                            </div>
                            <div class="flex space-x-2">
                                <button class="flex-1 bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg font-medium transition-colors flex items-center justify-center space-x-2">
                                    <i class="fas fa-eye text-sm"></i>
                                    <span>View</span>
                                </button>
                                <button class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-700 py-2 px-4 rounded-lg font-medium transition-colors flex items-center justify-center space-x-2">
                                    <i class="fas fa-edit text-sm"></i>
                                    <span>Edit</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Property Card 3 -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition-shadow">
                        <div class="relative">
                            <img src="https://images.pexels.com/photos/1396122/pexels-photo-1396122.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Garden Court Apartments" class="w-full h-48 object-cover">
                            <span class="absolute top-3 right-3 bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs font-medium">Active</span>
                        </div>
                        <div class="p-6">
                            <div class="flex items-start justify-between mb-3">
                                <h3 class="text-lg font-semibold text-gray-900">Garden Court Apartments</h3>
                                <button class="text-gray-400 hover:text-gray-600">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                            </div>
                            <div class="space-y-2 mb-4">
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-map-marker-alt w-4 mr-2"></i>
                                    <span>789 Elm Avenue, Austin, TX</span>
                                </div>
                                <div class="flex items-center justify-between text-sm text-gray-600">
                                    <div class="flex items-center">
                                        <i class="fas fa-building w-4 mr-2"></i>
                                        <span>32 units</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-users w-4 mr-2"></i>
                                        <span>28 occupied</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mb-4">
                                <div class="text-lg font-semibold text-gray-900">$1,900/month</div>
                                <div class="text-right">
                                    <div class="text-xs text-gray-500">Occupancy</div>
                                    <div class="text-sm font-semibold text-gray-900">88%</div>
                                </div>
                            </div>
                            <div class="flex space-x-2">
                                <button class="flex-1 bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg font-medium transition-colors flex items-center justify-center space-x-2">
                                    <i class="fas fa-eye text-sm"></i>
                                    <span>View</span>
                                </button>
                                <button class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-700 py-2 px-4 rounded-lg font-medium transition-colors flex items-center justify-center space-x-2">
                                    <i class="fas fa-edit text-sm"></i>
                                    <span>Edit</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Property Card 4 -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition-shadow">
                        <div class="relative">
                            <img src="https://images.pexels.com/photos/1396132/pexels-photo-1396132.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Lakeside Residences" class="w-full h-48 object-cover">
                            <span class="absolute top-3 right-3 bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full text-xs font-medium">Maintenance</span>
                        </div>
                        <div class="p-6">
                            <div class="flex items-start justify-between mb-3">
                                <h3 class="text-lg font-semibold text-gray-900">Lakeside Residences</h3>
                                <button class="text-gray-400 hover:text-gray-600">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                            </div>
                            <div class="space-y-2 mb-4">
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-map-marker-alt w-4 mr-2"></i>
                                    <span>321 Lake View Drive, Seattle, WA</span>
                                </div>
                                <div class="flex items-center justify-between text-sm text-gray-600">
                                    <div class="flex items-center">
                                        <i class="fas fa-building w-4 mr-2"></i>
                                        <span>16 units</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-users w-4 mr-2"></i>
                                        <span>14 occupied</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mb-4">
                                <div class="text-lg font-semibold text-gray-900">$2,400/month</div>
                                <div class="text-right">
                                    <div class="text-xs text-gray-500">Occupancy</div>
                                    <div class="text-sm font-semibold text-gray-900">88%</div>
                                </div>
                            </div>
                            <div class="flex space-x-2">
                                <button class="flex-1 bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg font-medium transition-colors flex items-center justify-center space-x-2">
                                    <i class="fas fa-eye text-sm"></i>
                                    <span>View</span>
                                </button>
                                <button class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-700 py-2 px-4 rounded-lg font-medium transition-colors flex items-center justify-center space-x-2">
                                    <i class="fas fa-edit text-sm"></i>
                                    <span>Edit</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Property Card 5 -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition-shadow">
                        <div class="relative">
                            <img src="https://images.pexels.com/photos/1571460/pexels-photo-1571460.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Urban Heights" class="w-full h-48 object-cover">
                            <span class="absolute top-3 right-3 bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs font-medium">Active</span>
                        </div>
                        <div class="p-6">
                            <div class="flex items-start justify-between mb-3">
                                <h3 class="text-lg font-semibold text-gray-900">Urban Heights</h3>
                                <button class="text-gray-400 hover:text-gray-600">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                            </div>
                            <div class="space-y-2 mb-4">
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-map-marker-alt w-4 mr-2"></i>
                                    <span>654 Broadway, Chicago, IL</span>
                                </div>
                                <div class="flex items-center justify-between text-sm text-gray-600">
                                    <div class="flex items-center">
                                        <i class="fas fa-building w-4 mr-2"></i>
                                        <span>28 units</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-users w-4 mr-2"></i>
                                        <span>26 occupied</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mb-4">
                                <div class="text-lg font-semibold text-gray-900">$2,600/month</div>
                                <div class="text-right">
                                    <div class="text-xs text-gray-500">Occupancy</div>
                                    <div class="text-sm font-semibold text-gray-900">93%</div>
                                </div>
                            </div>
                            <div class="flex space-x-2">
                                <button class="flex-1 bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg font-medium transition-colors flex items-center justify-center space-x-2">
                                    <i class="fas fa-eye text-sm"></i>
                                    <span>View</span>
                                </button>
                                <button class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-700 py-2 px-4 rounded-lg font-medium transition-colors flex items-center justify-center space-x-2">
                                    <i class="fas fa-edit text-sm"></i>
                                    <span>Edit</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Property Card 6 -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition-shadow">
                        <div class="relative">
                            <img src="https://images.pexels.com/photos/1571453/pexels-photo-1571453.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Riverside Commons" class="w-full h-48 object-cover">
                            <span class="absolute top-3 right-3 bg-purple-100 text-purple-800 px-2 py-1 rounded-full text-xs font-medium">Renovation</span>
                        </div>
                        <div class="p-6">
                            <div class="flex items-start justify-between mb-3">
                                <h3 class="text-lg font-semibold text-gray-900">Riverside Commons</h3>
                                <button class="text-gray-400 hover:text-gray-600">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                            </div>
                            <div class="space-y-2 mb-4">
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-map-marker-alt w-4 mr-2"></i>
                                    <span>987 River Road, Portland, OR</span>
                                </div>
                                <div class="flex items-center justify-between text-sm text-gray-600">
                                    <div class="flex items-center">
                                        <i class="fas fa-building w-4 mr-2"></i>
                                        <span>20 units</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-users w-4 mr-2"></i>
                                        <span>15 occupied</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mb-4">
                                <div class="text-lg font-semibold text-gray-900">$2,200/month</div>
                                <div class="text-right">
                                    <div class="text-xs text-gray-500">Occupancy</div>
                                    <div class="text-sm font-semibold text-gray-900">75%</div>
                                </div>
                            </div>
                            <div class="flex space-x-2">
                                <button class="flex-1 bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg font-medium transition-colors flex items-center justify-center space-x-2">
                                    <i class="fas fa-eye text-sm"></i>
                                    <span>View</span>
                                </button>
                                <button class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-700 py-2 px-4 rounded-lg font-medium transition-colors flex items-center justify-center space-x-2">
                                    <i class="fas fa-edit text-sm"></i>
                                    <span>Edit</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>