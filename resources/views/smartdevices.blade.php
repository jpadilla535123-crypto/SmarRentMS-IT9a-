<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartRent - Smart Devices Management</title>
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
                        <a href="#" class="flex items-center space-x-3 px-4 py-3 bg-blue-50 text-blue-600 rounded-lg border-r-2 border-blue-600">
                            <i class="fas fa-mobile-alt w-5"></i>
                            <span class="font-medium">Smart Devices</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-lg transition-colors">
                            <i class="fas fa-users w-5"></i>
                            <span>Tenants</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-lg transition-colors">
                            <i class="fas fa-wrench w-5"></i>
                            <span>Maintenance</span>
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
                        <h1 class="text-2xl font-bold text-gray-900">Smart Devices</h1>
                        <p class="text-gray-600 mt-1">Monitor and control smart devices across all your properties.</p>
                    </div>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="p-8 pb-4">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <!-- Total Devices -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-600 mb-1">Total Devices</p>
                                <p class="text-3xl font-bold text-gray-900">8</p>
                            </div>
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-mobile-alt text-blue-600 text-lg"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Online -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-600 mb-1">Online</p>
                                <p class="text-3xl font-bold text-gray-900">7</p>
                            </div>
                            <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-wifi text-green-600 text-lg"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Active -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-600 mb-1">Active</p>
                                <p class="text-3xl font-bold text-gray-900">6</p>
                            </div>
                            <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-power-off text-purple-600 text-lg"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Low Battery -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-600 mb-1">Low Battery</p>
                                <p class="text-3xl font-bold text-gray-900">1</p>
                            </div>
                            <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-exclamation-triangle text-red-600 text-lg"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Devices Grid -->
            <div class="px-8 pb-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Smart Thermostat -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-thermometer-half text-blue-600"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900">Smart Thermostat</h3>
                                    <p class="text-sm text-gray-500">Sunset Villa #12</p>
                                </div>
                            </div>
                            <button class="text-gray-400 hover:text-gray-600">
                                <i class="fas fa-cog"></i>
                            </button>
                        </div>
                        
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                <span class="text-sm text-green-600 font-medium">Online</span>
                            </div>
                            <div class="flex items-center space-x-1">
                                <div class="w-full bg-green-200 rounded-full h-2 w-16">
                                    <div class="bg-green-500 h-2 rounded-full" style="width: 85%"></div>
                                </div>
                                <span class="text-xs text-gray-600">85%</span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between mb-4">
                            <span class="text-sm text-gray-600">Status:</span>
                            <span class="text-sm font-medium text-gray-900">72°F</span>
                        </div>

                        <button class="w-full bg-red-50 text-red-600 py-2 px-4 rounded-lg font-medium hover:bg-red-100 transition-colors flex items-center justify-center space-x-2">
                            <i class="fas fa-power-off text-sm"></i>
                            <span>Turn Off</span>
                        </button>
                    </div>

                    <!-- Front Door Lock -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-lock text-blue-600"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900">Front Door Lock</h3>
                                    <p class="text-sm text-gray-500">Downtown Loft #3</p>
                                </div>
                            </div>
                            <button class="text-gray-400 hover:text-gray-600">
                                <i class="fas fa-cog"></i>
                            </button>
                        </div>
                        
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                <span class="text-sm text-green-600 font-medium">Online</span>
                            </div>
                            <div class="flex items-center space-x-1">
                                <div class="w-full bg-green-200 rounded-full h-2 w-16">
                                    <div class="bg-green-500 h-2 rounded-full" style="width: 65%"></div>
                                </div>
                                <span class="text-xs text-gray-600">65%</span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between mb-4">
                            <span class="text-sm text-gray-600">Status:</span>
                            <span class="text-sm font-medium text-gray-900">Locked</span>
                        </div>

                        <button class="w-full bg-red-50 text-red-600 py-2 px-4 rounded-lg font-medium hover:bg-red-100 transition-colors flex items-center justify-center space-x-2">
                            <i class="fas fa-power-off text-sm"></i>
                            <span>Turn Off</span>
                        </button>
                    </div>

                    <!-- Living Room Lights -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-lightbulb text-yellow-600"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900">Living Room Lights</h3>
                                    <p class="text-sm text-gray-500">Garden Court #15</p>
                                </div>
                            </div>
                            <button class="text-gray-400 hover:text-gray-600">
                                <i class="fas fa-cog"></i>
                            </button>
                        </div>
                        
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                <span class="text-sm text-green-600 font-medium">Online</span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between mb-4">
                            <span class="text-sm text-gray-600">Status:</span>
                            <span class="text-sm font-medium text-gray-900">80% Brightness</span>
                        </div>

                        <button class="w-full bg-red-50 text-red-600 py-2 px-4 rounded-lg font-medium hover:bg-red-100 transition-colors flex items-center justify-center space-x-2">
                            <i class="fas fa-power-off text-sm"></i>
                            <span>Turn Off</span>
                        </button>
                    </div>

                    <!-- Security Camera -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-gray-100 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-video text-gray-600"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900">Security Camera</h3>
                                    <p class="text-sm text-gray-500">Riverside Manor #8</p>
                                </div>
                            </div>
                            <button class="text-gray-400 hover:text-gray-600">
                                <i class="fas fa-cog"></i>
                            </button>
                        </div>
                        
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                                <span class="text-sm text-red-600 font-medium">Offline</span>
                            </div>
                            <div class="flex items-center space-x-1">
                                <div class="w-full bg-yellow-200 rounded-full h-2 w-16">
                                    <div class="bg-yellow-500 h-2 rounded-full" style="width: 45%"></div>
                                </div>
                                <span class="text-xs text-gray-600">45%</span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between mb-4">
                            <span class="text-sm text-gray-600">Status:</span>
                            <span class="text-sm font-medium text-gray-900">Recording</span>
                        </div>

                        <button class="w-full bg-green-50 text-green-600 py-2 px-4 rounded-lg font-medium hover:bg-green-100 transition-colors flex items-center justify-center space-x-2">
                            <i class="fas fa-power-off text-sm"></i>
                            <span>Turn On</span>
                        </button>
                    </div>

                    <!-- Kitchen Lights -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-lightbulb text-yellow-600"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900">Kitchen Lights</h3>
                                    <p class="text-sm text-gray-500">Tech Hub #22</p>
                                </div>
                            </div>
                            <button class="text-gray-400 hover:text-gray-600">
                                <i class="fas fa-cog"></i>
                            </button>
                        </div>
                        
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                <span class="text-sm text-green-600 font-medium">Online</span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between mb-4">
                            <span class="text-sm text-gray-600">Status:</span>
                            <span class="text-sm font-medium text-gray-900">Off</span>
                        </div>

                        <button class="w-full bg-green-50 text-green-600 py-2 px-4 rounded-lg font-medium hover:bg-green-100 transition-colors flex items-center justify-center space-x-2">
                            <i class="fas fa-power-off text-sm"></i>
                            <span>Turn On</span>
                        </button>
                    </div>

                    <!-- Smart Lock Pro -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-lock text-blue-600"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900">Smart Lock Pro</h3>
                                    <p class="text-sm text-gray-500">Historic Heights #7</p>
                                </div>
                            </div>
                            <button class="text-gray-400 hover:text-gray-600">
                                <i class="fas fa-cog"></i>
                            </button>
                        </div>
                        
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                <span class="text-sm text-green-600 font-medium">Online</span>
                            </div>
                            <div class="flex items-center space-x-1">
                                <div class="w-full bg-green-200 rounded-full h-2 w-16">
                                    <div class="bg-green-500 h-2 rounded-full" style="width: 92%"></div>
                                </div>
                                <span class="text-xs text-gray-600">92%</span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between mb-4">
                            <span class="text-sm text-gray-600">Status:</span>
                            <span class="text-sm font-medium text-gray-900">Unlocked</span>
                        </div>

                        <button class="w-full bg-red-50 text-red-600 py-2 px-4 rounded-lg font-medium hover:bg-red-100 transition-colors flex items-center justify-center space-x-2">
                            <i class="fas fa-power-off text-sm"></i>
                            <span>Turn Off</span>
                        </button>
                    </div>

                    <!-- Climate Control -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-thermometer-half text-blue-600"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900">Climate Control</h3>
                                    <p class="text-sm text-gray-500">Ocean View #4</p>
                                </div>
                            </div>
                            <button class="text-gray-400 hover:text-gray-600">
                                <i class="fas fa-cog"></i>
                            </button>
                        </div>
                        
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                <span class="text-sm text-green-600 font-medium">Online</span>
                            </div>
                            <div class="flex items-center space-x-1">
                                <div class="w-full bg-green-200 rounded-full h-2 w-16">
                                    <div class="bg-green-500 h-2 rounded-full" style="width: 78%"></div>
                                </div>
                                <span class="text-xs text-gray-600">78%</span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between mb-4">
                            <span class="text-sm text-gray-600">Status:</span>
                            <span class="text-sm font-medium text-gray-900">68°F</span>
                        </div>

                        <button class="w-full bg-green-50 text-green-600 py-2 px-4 rounded-lg font-medium hover:bg-green-100 transition-colors flex items-center justify-center space-x-2">
                            <i class="fas fa-power-off text-sm"></i>
                            <span>Turn On</span>
                        </button>
                    </div>

                    <!-- Outdoor Camera -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-gray-100 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-video text-gray-600"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900">Outdoor Camera</h3>
                                    <p class="text-sm text-gray-500">Sunset Villa #5</p>
                                </div>
                            </div>
                            <button class="text-gray-400 hover:text-gray-600">
                                <i class="fas fa-cog"></i>
                            </button>
                        </div>
                        
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                <span class="text-sm text-green-600 font-medium">Online</span>
                            </div>
                            <div class="flex items-center space-x-1">
                                <div class="w-full bg-yellow-200 rounded-full h-2 w-16">
                                    <div class="bg-yellow-500 h-2 rounded-full" style="width: 23%"></div>
                                </div>
                                <span class="text-xs text-gray-600">23%</span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between mb-4">
                            <span class="text-sm text-gray-600">Status:</span>
                            <span class="text-sm font-medium text-gray-900">Monitoring</span>
                        </div>

                        <button class="w-full bg-green-50 text-green-600 py-2 px-4 rounded-lg font-medium hover:bg-green-100 transition-colors flex items-center justify-center space-x-2">
                            <i class="fas fa-power-off text-sm"></i>
                            <span>Turn On</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>