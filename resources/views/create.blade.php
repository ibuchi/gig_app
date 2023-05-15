<x-app-layout>
    <div class="px-20 py-5 bold text-gray-500">
        <p>New Gig</P>
    </div> 
    <div  class="px-20 mb-20">
        <form method="POST" action="{{ route('gigs.store') }}" class="border rounded px-20">
            @csrf
            <div class="space-y-12">
                <div class="mt-10 grid grid-cols-1 gap-y-8 gap-x-6 sm:grid-cols-6">
                
                    <div class="sm:col-span-3">
                    <label for="role" class="block text-sm font-medium leading-6 text-gray-600">Role</label>
                    <div class="mt-2">
                        <input type="text" name="role" id="role" autocomplete="given-role" value="" class="block w-full rounded-md  border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-yellow-500 sm:text-sm sm:leading-6">
                    </div>
                    </div>

                    <div class="sm:col-span-3">
                    <label for="company" class="block text-sm font-medium leading-6 text-gray-600">Company</label>
                    <div class="mt-2">
                        <input type="text" name="company" id="company" autocomplete="company-name" value="" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-yellow-500 sm:text-sm sm:leading-6">
                    </div>
                    </div>
            

                    <div class="sm:col-span-3">
                    <label for="location" class="block text-sm font-medium leading-6 text-gray-600">Location</label>
                    <div class="mt-2">
                        <select id="country" name="country" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-yellow-500 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option value="country" selected hidden>Select a Country</option>
                        <option>United States</option>
                        <option>Canada</option>
                        <option>Mexico</option>
                        </select>
                    </div>
                    </div>

                    <div class="sm:col-span-3">
                    <div class="mt-8">
                        <select id="state" name="state" autocomplete="state-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-yellow-500 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option value="state" selected hidden>Select a State</option>
                        <option>California</option>
                        <option>Texas</option>
                        <option>Alabama</option>
                        </select>
                    </div>
                    </div>

                    <div class="col-span-full">
                    <div class="mt-2">
                        <input type="text" name="address" id="address" autocomplete="address" placeholder="Address" class="block w-full rounded-md border-0 py-1.5 text-gray-600 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-yellow-500 sm:text-sm sm:leading-6">
                    </div>
                    </div>

                    <div class="col-span-full">
                    <label for="location" class="block text-sm font-medium leading-6 text-gray-600">Add tags</label>
                    <div class="mt-2">
                        <input type="text" name="tags" id="tags" autocomplete="tags" placeholder="Add tags" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-yellow-500 sm:text-sm sm:leading-6">
                    </div>
                    </div>

                    <div class="sm:col-span-3">
                    <label for="salary" class="block text-sm font-medium leading-6 text-gray-600">Salary</label>
                    <div class="mt-2">
                        <input type="text" name="minimum_salary" id="minimum_salary" autocomplete="given-salary" placeholder="minimum" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-yellow-500 sm:text-sm sm:leading-6">
                    </div>
                    </div>
                    <div class="sm:col-span-3">
                    <div class="mt-8">
                        <input type="text" name="maximum_salary" id="maximum_salary" autocomplete="given-salary" placeholder="maximum" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-yellow-500 sm:text-sm sm:leading-6">
                    </div>
                    </div>

                </div>
                </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="/dashboard"><button type="button" class="text-sm font-semibold leading-6 text-gray-900 hover:bg-yellow-100 py-2 px-3 rounded-md">Cancel</button></a>
                <button type="submit" class="rounded-md bg-yellow-500 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-yellow-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-500">Add gig</button>
            </div>
        </form>
    </div>

</x-app-layout>
