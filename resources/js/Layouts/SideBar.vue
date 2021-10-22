<!-- This example requires Tailwind CSS v2.0+ -->
<template>
    <div
        class="
            flex flex-col flex-grow
            border-r border-gray-200
            pt-5
            pb-4
            bg-gray-900
            overflow-y-auto
        "
    >
        <div class="flex items-center flex-shrink-0 px-4">
            <img
                class="h-8 w-auto"
                src="https://tailwindui.com/img/logos/workflow-logo-indigo-600-mark-gray-800-text.svg"
                alt="Workflow"
            />
        </div>
        <div class="mt-5 flex-grow flex flex-col">
            <nav class="flex-1 px-2 space-y-1 bg-gray-900" aria-label="Sidebar">
                <template v-for="item in navigation" :key="item.name">
                    <div v-if="!item.children">
                        <a
                            href="#"
                            :class="[
                                item.current
                                    ? 'bg-gray-700 text-white'
                                    : 'bg-gray-900 text-white hover:bg-gray-700 hover:text-white',
                                'group w-full flex items-center pl-2 py-2 text-sm font-medium rounded-md',
                            ]"
                        >
                            <component
                                :is="item.icon"
                                :class="[
                                    item.current
                                        ? 'text-white'
                                        : 'text-white group-hover:text-white',
                                    'mr-3 flex-shrink-0 h-6 w-6',
                                ]"
                                aria-hidden="true"
                            />
                            {{ item.name }}
                        </a>
                    </div>
                    <Disclosure
                        as="div"
                        v-else
                        class="space-y-1"
                        v-slot="{ open }"
                    >
                        <DisclosureButton
                            :class="[
                                item.current
                                    ? 'bg-gray-100 text-white'
                                    : 'bg-gray-900 text-white hover:bg-gray-700 hover:text-white',
                                'group w-full flex items-center pl-2 pr-1 py-2 text-left text-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500',
                            ]"
                        >
                            <component
                                :is="item.icon"
                                class="
                                    mr-3
                                    flex-shrink-0
                                    h-6
                                    w-6
                                    text-gray-400
                                    group-hover:text-white
                                "
                                aria-hidden="true"
                            />
                            <span class="flex-1">
                                {{ item.name }}
                            </span>
                            <svg
                                :class="[
                                    open
                                        ? 'text-white rotate-90'
                                        : 'text-gray-300',
                                    'ml-3 flex-shrink-0 h-5 w-5 transform group-hover:text-white transition-colors ease-in-out duration-150',
                                ]"
                                viewBox="0 0 20 20"
                                aria-hidden="true"
                            >
                                <path
                                    d="M6 6L14 10L6 14V6Z"
                                    fill="currentColor"
                                />
                            </svg>
                        </DisclosureButton>
                        <DisclosurePanel class="space-y-1">
                            <a
                                v-for="subItem in item.children"
                                :key="subItem.name"
                                :href="subItem.href"
                                class="
                                    group
                                    w-full
                                    flex
                                    items-center
                                    pl-11
                                    pr-2
                                    py-2
                                    text-sm
                                    font-medium
                                    text-white
                                    rounded-md
                                    hover:text-white hover:bg-gray-700
                                "
                            >
                                {{ subItem.name }}
                            </a>
                        </DisclosurePanel>
                    </Disclosure>
                </template>
            </nav>
        </div>
    </div>
</template>

<script>
import { Disclosure, DisclosureButton, DisclosurePanel } from "@headlessui/vue";
import { HomeIcon, UsersIcon, CashIcon } from "@heroicons/vue/outline";

const navigation = [
    { name: "Dashboard", icon: HomeIcon, current: true, href: "#" },
    {
        name: "Borrowers",
        icon: UsersIcon,
        current: false,
        children: [
            { name: "All", href: route("borrowers.index") },
            { name: "Create", href: route("borrowers.create") },
            { name: "Calendar", href: "#" },
            { name: "Settings", href: "#" },
        ],
    },
    {
        name: "Expenses",
        icon: CashIcon,
        current: false,
        children: [
            { name: "All", href: route("expenses.index") },
            { name: "Create", href: route("expenses.create") },
        ],
    },
];

export default {
    components: {
        Disclosure,
        DisclosureButton,
        DisclosurePanel,
    },
    setup() {
        return {
            navigation,
        };
    },
};
</script>
