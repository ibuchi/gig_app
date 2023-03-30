<x-app-layout>
<div>
    <form method="POST" action="/gigs/new-gig">
        @csrf
        <div class="space-y-12">
            <div class="mt-10 grid grid-cols-1 gap-y-8 gap-x-6 sm:grid-cols-6">
            
                <div class="sm:col-span-3">
                <label for="role" class="block text-sm font-medium leading-6 text-gray-900">Role</label>
                <div class="mt-2">
                    <input type="text" name="role" id="role" autocomplete="given-role" value="" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                </div>

                <div class="sm:col-span-3">
                <label for="company" class="block text-sm font-medium leading-6 text-gray-900">Company</label>
                <div class="mt-2">
                    <input type="text" name="company" id="company" autocomplete="company-name" value="" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                </div>
        

                <div class="sm:col-span-3">
                <label for="location" class="block text-sm font-medium leading-6 text-gray-900">Location</label>
                <div class="mt-2">
                    <select id="country" name="country" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                    <option value="country" selected hidden>Select a Country</option>
                    <option>United States</option>
                    <option>Canada</option>
                    <option>Mexico</option>
                    </select>
                </div>
                </div>

                <div class="sm:col-span-3">
                <div class="mt-8">
                    <select id="state" name="state" autocomplete="state-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                    <option value="state" selected hidden>Select a State</option>
                    <option>California</option>
                    <option>Texas</option>
                    <option>Alabama</option>
                    </select>
                </div>
                </div>

                <div class="col-span-full">
                <div class="mt-2">
                    <input type="text" name="address" id="address" autocomplete="address" placeholder="Address" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                </div>

                <div class="col-span-full">
                <label for="location" class="block text-sm font-medium leading-6 text-gray-900">Add tags</label>
                <div class="mt-2">
                    <input type="text" name="tags" id="tags" autocomplete="tags" placeholder="Add tags" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                </div>

                <div class="sm:col-span-3">
                <label for="salary" class="block text-sm font-medium leading-6 text-gray-900">Salary</label>
                <div class="mt-2">
                    <input type="text" name="minimum_salary" id="minimum_salary" autocomplete="given-salary" placeholder="minimum" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                </div>
                <div class="sm:col-span-3">
                <div class="mt-8">
                    <input type="text" name="maximum_salary" id="maximum_salary" autocomplete="given-salary" placeholder="maximum" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                </div>


            </div>
            </div>

        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/dashboard"><button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button></a>
            <button type="submit" class="rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Continue</button>
        </div>
    </form>
</div>

</x-app-layout>