
<template>
    <div class="py-2">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 md:px-8">
            <h1 class="text-2xl font-semibold text-gray-900 py-2">
                Create Borrower Profile
            </h1>
        </div>
        <div class="max-w-6xl mx-auto px-4 sm:px-6 md:px-8">
            <!-- Replace with your content -->
            <form action="{{route('borrowers.store')}}" method="PUT">
                <div class="space-y-6">
                    <div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6">
                        <div class="md:grid md:grid-cols-2 md:gap-6">
                            <div class="mt-5 md:mt-0 md:col-span-2">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label
                                            for="first_name"
                                            class="
                                                block
                                                text-sm
                                                font-medium
                                                text-gray-700
                                            "
                                            >First name</label
                                        >
                                        <input
                                            type="text"
                                            name="first_name"
                                            id="first_name"
                                            autocomplete="given-name"
                                            class="
                                                mt-1
                                                focus:ring-indigo-500
                                                focus:border-indigo-500
                                                block
                                                w-full
                                                shadow-sm
                                                sm:text-sm
                                                border-gray-300
                                                rounded-md
                                            "
                                            required
                                        />
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label
                                            for="last_name"
                                            class="
                                                block
                                                text-sm
                                                font-medium
                                                text-gray-700
                                            "
                                            >Last name</label
                                        >
                                        <input
                                            type="text"
                                            name="last_name"
                                            id="last_name"
                                            autocomplete="family-name"
                                            class="
                                                mt-1
                                                focus:ring-indigo-500
                                                focus:border-indigo-500
                                                block
                                                w-full
                                                shadow-sm
                                                sm:text-sm
                                                border-gray-300
                                                rounded-md
                                            "
                                            required
                                        />
                                    </div>

                                    <div class="col-span-6 sm:col-span-4">
                                        <label
                                            for="email-address"
                                            class="
                                                block
                                                text-sm
                                                font-medium
                                                text-gray-700
                                            "
                                            >Email address</label
                                        >
                                        <input
                                            type="text"
                                            name="email-address"
                                            id="email-address"
                                            autocomplete="email"
                                            class="
                                                mt-1
                                                focus:ring-indigo-500
                                                focus:border-indigo-500
                                                block
                                                w-full
                                                shadow-sm
                                                sm:text-sm
                                                border-gray-300
                                                rounded-md
                                            "
                                        />
                                    </div>
                                    <div class="col-span-6 sm:col-span-2">
                                        <label
                                            for="connection"
                                            class="
                                                block
                                                text-sm
                                                font-medium
                                                text-gray-700
                                            "
                                            >Connection</label
                                        >
                                        <input
                                            type="text"
                                            name="connection"
                                            id="connection"
                                            autocomplete="family-name"
                                            class="
                                                mt-1
                                                focus:ring-indigo-500
                                                focus:border-indigo-500
                                                block
                                                w-full
                                                shadow-sm
                                                sm:text-sm
                                                border-gray-300
                                                rounded-md
                                            "
                                            required
                                        />
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label
                                            for="country"
                                            class="
                                                block
                                                text-sm
                                                font-medium
                                                text-gray-700
                                            "
                                            >Country / Region</label
                                        >
                                        <select
                                            id="country"
                                            name="country"
                                            autocomplete="country"
                                            class="
                                                mt-1
                                                block
                                                w-full
                                                py-2
                                                px-3
                                                border border-gray-300
                                                bg-white
                                                rounded-md
                                                shadow-sm
                                                focus:outline-none
                                                focus:ring-indigo-500
                                                focus:border-indigo-500
                                                sm:text-sm
                                            "
                                        >
                                            <option>United States</option>
                                            <option>Canada</option>
                                            <option>Mexico</option>
                                        </select>
                                    </div>

                                    <div class="col-span-6">
                                        <label
                                            for="street-address"
                                            class="
                                                block
                                                text-sm
                                                font-medium
                                                text-gray-700
                                            "
                                            >Street address</label
                                        >
                                        <input
                                            type="text"
                                            name="street-address"
                                            id="street-address"
                                            autocomplete="street-address"
                                            class="
                                                mt-1
                                                focus:ring-indigo-500
                                                focus:border-indigo-500
                                                block
                                                w-full
                                                shadow-sm
                                                sm:text-sm
                                                border-gray-300
                                                rounded-md
                                            "
                                        />
                                    </div>

                                    <div
                                        class="
                                            col-span-6
                                            sm:col-span-6
                                            lg:col-span-2
                                        "
                                    >
                                        <label
                                            for="city"
                                            class="
                                                block
                                                text-sm
                                                font-medium
                                                text-gray-700
                                            "
                                            >City</label
                                        >
                                        <input
                                            type="text"
                                            name="city"
                                            id="city"
                                            class="
                                                mt-1
                                                focus:ring-indigo-500
                                                focus:border-indigo-500
                                                block
                                                w-full
                                                shadow-sm
                                                sm:text-sm
                                                border-gray-300
                                                rounded-md
                                            "
                                        />
                                    </div>

                                    <div
                                        class="
                                            col-span-6
                                            sm:col-span-3
                                            lg:col-span-2
                                        "
                                    >
                                        <label
                                            for="state"
                                            class="
                                                block
                                                text-sm
                                                font-medium
                                                text-gray-700
                                            "
                                            >State / Province</label
                                        >
                                        <input
                                            type="text"
                                            name="state"
                                            id="state"
                                            class="
                                                mt-1
                                                focus:ring-indigo-500
                                                focus:border-indigo-500
                                                block
                                                w-full
                                                shadow-sm
                                                sm:text-sm
                                                border-gray-300
                                                rounded-md
                                            "
                                        />
                                    </div>

                                    <div
                                        class="
                                            col-span-6
                                            sm:col-span-3
                                            lg:col-span-2
                                        "
                                    >
                                        <label
                                            for="postal-code"
                                            class="
                                                block
                                                text-sm
                                                font-medium
                                                text-gray-700
                                            "
                                            >ZIP / Postal</label
                                        >
                                        <input
                                            type="text"
                                            name="postal-code"
                                            id="postal-code"
                                            autocomplete="postal-code"
                                            class="
                                                mt-1
                                                focus:ring-indigo-500
                                                focus:border-indigo-500
                                                block
                                                w-full
                                                shadow-sm
                                                sm:text-sm
                                                border-gray-300
                                                rounded-md
                                            "
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6">
                        <div class="md:grid md:grid-cols-2 md:gap-6">
                            <div class="mt-5 md:mt-0 md:col-span-2">
                                <div class="space-y-6" action="#" method="POST">
                                    <div class="grid grid-cols-3 gap-6">
                                        <div class="col-span-3 sm:col-span-2">
                                            <label
                                                for="company-website"
                                                class="
                                                    block
                                                    text-sm
                                                    font-medium
                                                    text-gray-700
                                                "
                                            >
                                                Website
                                            </label>
                                            <div
                                                class="
                                                    mt-1
                                                    flex
                                                    rounded-md
                                                    shadow-sm
                                                "
                                            >
                                                <span
                                                    class="
                                                        inline-flex
                                                        items-center
                                                        px-3
                                                        rounded-l-md
                                                        border
                                                        border-r-0
                                                        border-gray-300
                                                        bg-gray-50
                                                        text-gray-500 text-sm
                                                    "
                                                >
                                                    http://
                                                </span>
                                                <input
                                                    type="text"
                                                    name="company-website"
                                                    id="company-website"
                                                    class="
                                                        focus:ring-indigo-500
                                                        focus:border-indigo-500
                                                        flex-1
                                                        block
                                                        w-full
                                                        rounded-none
                                                        rounded-r-md
                                                        sm:text-sm
                                                        border-gray-300
                                                    "
                                                    placeholder="www.example.com"
                                                />
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <label
                                            for="about"
                                            class="
                                                block
                                                text-sm
                                                font-medium
                                                text-gray-700
                                            "
                                        >
                                            About
                                        </label>
                                        <div class="mt-1">
                                            <textarea
                                                id="about"
                                                name="about"
                                                rows="3"
                                                class="
                                                    shadow-sm
                                                    focus:ring-indigo-500
                                                    focus:border-indigo-500
                                                    block
                                                    w-full
                                                    sm:text-sm
                                                    border border-gray-300
                                                    rounded-md
                                                "
                                                placeholder="you@example.com"
                                            />
                                        </div>
                                        <p class="mt-2 text-sm text-gray-500">
                                            Brief description about the
                                            borrower.
                                        </p>
                                    </div>

                                    <div>
                                        <label
                                            class="
                                                block
                                                text-sm
                                                font-medium
                                                text-gray-700
                                            "
                                        >
                                            Photo
                                        </label>
                                        <div
                                            class="
                                                mt-1
                                                flex
                                                items-center
                                                space-x-5
                                            "
                                        >
                                            <span
                                                class="
                                                    inline-block
                                                    h-12
                                                    w-12
                                                    rounded-full
                                                    overflow-hidden
                                                    bg-gray-100
                                                "
                                            >
                                                <svg
                                                    class="
                                                        h-full
                                                        w-full
                                                        text-gray-300
                                                    "
                                                    fill="currentColor"
                                                    viewBox="0 0 24 24"
                                                >
                                                    <path
                                                        d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z"
                                                    />
                                                </svg>
                                            </span>
                                            <button
                                                type="button"
                                                class="
                                                    bg-white
                                                    py-2
                                                    px-3
                                                    border border-gray-300
                                                    rounded-md
                                                    shadow-sm
                                                    text-sm
                                                    leading-4
                                                    font-medium
                                                    text-gray-700
                                                    hover:bg-gray-50
                                                    focus:outline-none
                                                    focus:ring-2
                                                    focus:ring-offset-2
                                                    focus:ring-indigo-500
                                                "
                                            >
                                                Change
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pt-2 pb-4 px-2 flex justify-end">
                    <button
                        v-on:click="$inertia.visit(route('borrowers.index'))"
                        type="button"
                        class="
                            bg-white
                            py-2
                            px-4
                            border border-gray-300
                            rounded-md
                            shadow-sm
                            text-sm
                            font-medium
                            text-gray-700
                            hover:bg-gray-50
                            focus:outline-none
                            focus:ring-2
                            focus:ring-offset-2
                            focus:ring-indigo-500
                        "
                    >
                        Cancel
                    </button>
                    <button
                        type="submit"
                        class="
                            ml-3
                            inline-flex
                            justify-center
                            py-2
                            px-4
                            border border-transparent
                            shadow-sm
                            text-sm
                            font-medium
                            rounded-md
                            text-white
                            bg-indigo-600
                            hover:bg-indigo-700
                            focus:outline-none
                            focus:ring-2
                            focus:ring-offset-2
                            focus:ring-indigo-500
                        "
                    >
                        Save
                    </button>
                </div>
            </form>
            <!-- /End replace -->
        </div>
    </div>
</template>

<script>
import AppLayoutVue from "../../Layouts/AppLayout.vue";
export default {
    layout: AppLayoutVue,
    data() {
        return {
            form: {
                first_name: null,
                last_name: null,
                connection: null,
            },
        };
    },
    methods: {
        submit() {
            this.$inertia.post(route("borrowers.store"), this.form);
        },
    },
};
</script>
