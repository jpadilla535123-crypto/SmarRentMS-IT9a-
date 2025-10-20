<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartRent - Maintenance Management</title>
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
                        <a href="#" class="flex items-center space-x-3 px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-lg transition-colors">
                            <i class="fas fa-th-large w-5"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-lg transition-colors">
                            <i class="fas fa-building w-5"></i>
                            <span>Properties</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-lg transition-colors">
                            <i class="fas fa-mobile-alt w-5"></i>
                            <span>Smart Devices</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-lg transition-colors">
                            <i class="fas fa-users w-5"></i>
                            <span>Tenants</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 px-4 py-3 bg-blue-50 text-blue-600 rounded-lg border-r-2 border-blue-600">
                            <i class="fas fa-wrench w-5"></i>
                            <span class="font-medium">Maintenance</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-lg transition-colors">
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
                        <h1 class="text-2xl font-bold text-gray-900">Maintenance</h1>
                        <p class="text-gray-600 mt-1">Track and manage maintenance requests across all properties.</p>
                    </div>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded-lg font-medium hover:bg-blue-700 transition-colors flex items-center space-x-2">
                        <i class="fas fa-plus text-sm"></i>
                        <span>New Request</span>
                    </button>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="p-8 pb-4">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <!-- Total Requests -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-600 mb-1">Total Requests</p>
                                <p class="text-3xl font-bold text-gray-900">6</p>
                            </div>
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-wrench text-blue-600 text-lg"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Pending -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-600 mb-1">Pending</p>
                                <p class="text-3xl font-bold text-gray-900">3</p>
                            </div>
                            <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-clock text-orange-600 text-lg"></i>
                            </div>
                        </div>
                    </div>

                    <!-- In Progress -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-600 mb-1">In Progress</p>
                                <p class="text-3xl font-bold text-gray-900">1</p>
                            </div>
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-check-circle text-blue-600 text-lg"></i>
                            </div>
                        </div>
                    </div>

                    <!-- High Priority -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-600 mb-1">High Priority</p>
                                <p class="text-3xl font-bold text-gray-900">2</p>
                            </div>
                            <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-exclamation-triangle text-red-600 text-lg"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Search and Filter -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mb-6">
                    <div class="flex items-center justify-between">
                        <div class="flex-1 max-w-md">
                            <div class="relative">
                                <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                                <input type="text" placeholder="Search requests..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                        </div>
                        <div class="ml-4 flex space-x-3">
                            <button class="flex items-center space-x-2 px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                                <i class="fas fa-filter text-gray-400"></i>
                                <span class="text-gray-700">All Status</span>
                                <i class="fas fa-chevron-down text-gray-400"></i>
                            </button>
                            <button class="flex items-center space-x-2 px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                                <i class="fas fa-filter text-gray-400"></i>
                                <span class="text-gray-700">All Priority</span>
                                <i class="fas fa-chevron-down text-gray-400"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Maintenance Requests Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- AC Unit Not Cooling -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex space-x-2">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                    HIGH
                                </span>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-orange-100 text-orange-800">
                                    PENDING
                                </span>
                            </div>
                            <button class="text-gray-400 hover:text-gray-600 transition-colors">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                        </div>
                        
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">AC Unit Not Cooling</h3>
                        <p class="text-gray-600 text-sm mb-4">Air conditioning in master bedroom is running but not cooling effectively.</p>
                        
                        <div class="space-y-3 mb-6">
                            <div class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-home w-4 mr-3"></i>
                                <span>Sunset Villa #12</span>
                                <span class="ml-auto font-medium">HVAC</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-user w-4 mr-3"></i>
                                <span>Sarah Johnson</span>
                                <span class="ml-auto font-medium">$250</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-calendar w-4 mr-3"></i>
                                <span>1/8/2024</span>
                                <span class="ml-auto">Assigned to Mike Rodriguez</span>
                            </div>
                        </div>
                        
                        <div class="flex space-x-3">
                            <button class="flex-1 bg-blue-600 text-white py-2 px-4 rounded-lg font-medium hover:bg-blue-700 transition-colors flex items-center justify-center space-x-2">
                                <i class="fas fa-sync-alt text-sm"></i>
                                <span>Update Status</span>
                            </button>
                            <button class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors">
                                View Details
                            </button>
                        </div>
                    </div>

                    <!-- Kitchen Sink Leak -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex space-x-2">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                    MEDIUM
                                </span>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                    IN PROGRESS
                                </span>
                            </div>
                            <button class="text-gray-400 hover:text-gray-600 transition-colors">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                        </div>
                        
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Kitchen Sink Leak</h3>
                        <p class="text-gray-600 text-sm mb-4">Water leak under kitchen sink, causing damage to cabinet floor.</p>
                        
                        <div class="space-y-3 mb-6">
                            <div class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-home w-4 mr-3"></i>
                                <span>Downtown Loft #3</span>
                                <span class="ml-auto font-medium">Plumbing</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-user w-4 mr-3"></i>
                                <span>Michael Chen</span>
                                <span class="ml-auto font-medium">$180</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-calendar w-4 mr-3"></i>
                                <span>1/7/2024</span>
                                <span class="ml-auto">Assigned to Tom Wilson</span>
                            </div>
                        </div>
                        
                        <div class="flex space-x-3">
                            <button class="flex-1 bg-blue-600 text-white py-2 px-4 rounded-lg font-medium hover:bg-blue-700 transition-colors flex items-center justify-center space-x-2">
                                <i class="fas fa-clock text-sm"></i>
                                <span>Update Status</span>
                            </button>
                            <button class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors">
                                View Details
                            </button>
                        </div>
                    </div>

                    <!-- Front Door Lock Malfunction -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex space-x-2">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                    HIGH
                                </span>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-orange-100 text-orange-800">
                                    PENDING
                                </span>
                            </div>
                            <button class="text-gray-400 hover:text-gray-600 transition-colors">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                        </div>
                        
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Front Door Lock Malfunction</h3>
                        <p class="text-gray-600 text-sm mb-4">Smart lock not responding to key fob or mobile app.</p>
                        
                        <div class="space-y-3 mb-6">
                            <div class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-home w-4 mr-3"></i>
                                <span>Garden Court #15</span>
                                <span class="ml-auto font-medium">Security</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-user w-4 mr-3"></i>
                                <span>Emily Rodriguez</span>
                                <span class="ml-auto font-medium">$120</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-calendar w-4 mr-3"></i>
                                <span>1/6/2024</span>
                                <span class="ml-auto">Assigned to Lisa Chen</span>
                            </div>
                        </div>
                        
                        <div class="flex space-x-3">
                            <button class="flex-1 bg-blue-600 text-white py-2 px-4 rounded-lg font-medium hover:bg-blue-700 transition-colors flex items-center justify-center space-x-2">
                                <i class="fas fa-sync-alt text-sm"></i>
                                <span>Update Status</span>
                            </button>
                            <button class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors">
                                View Details
                            </button>
                        </div>
                    </div>

                    <!-- Light Fixture Replacement -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex space-x-2">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    LOW
                                </span>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    COMPLETED
                                </span>
                            </div>
                            <button class="text-gray-400 hover:text-gray-600 transition-colors">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                        </div>
                        
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Light Fixture Replacement</h3>
                        <p class="text-gray-600 text-sm mb-4">Bathroom light fixture flickering and needs replacement.</p>
                        
                        <div class="space-y-3 mb-6">
                            <div class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-home w-4 mr-3"></i>
                                <span>Tech Hub #22</span>
                                <span class="ml-auto font-medium">Electrical</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-user w-4 mr-3"></i>
                                <span>David Thompson</span>
                                <span class="ml-auto font-medium">$95</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-calendar w-4 mr-3"></i>
                                <span>1/5/2024</span>
                                <span class="ml-auto">Assigned to Lisa Chen</span>
                            </div>
                        </div>
                        
                        <div class="flex space-x-3">
                            <button class="flex-1 bg-blue-600 text-white py-2 px-4 rounded-lg font-medium hover:bg-blue-700 transition-colors flex items-center justify-center space-x-2">
                                <i class="fas fa-sync-alt text-sm"></i>
                                <span>Update Status</span>
                            </button>
                            <button class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors">
                                View Details
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>