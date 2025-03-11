import * as React from "react";
import { BookOpen, Bot, Frame, ImageOff, Map, PieChart, Settings2, SquareTerminal } from "lucide-react";

import { NavMain } from "@/components/nav-main";
import { NavUser } from "@/components/nav-user";
import { Sidebar, SidebarContent, SidebarFooter, SidebarHeader, SidebarRail, SidebarMenuButton } from "@/components/ui/sidebar";
import { usePage } from "@inertiajs/react";

// This is sample data.
const data = {
    user: {
        name: "shadcn",
        email: "m@example.com",
        avatar: "/avatars/shadcn.jpg",
    },
    navMain: [
        {
            title: "Dashboard",
            url: "/dashboard",
            icon: SquareTerminal,
            isActive: true,
            // Links below change right dash display
            items: [
                {
                    title: "History",
                    url: "#",
                },
                {
                    title: "Visitations",
                    url: "#",
                },
                {
                    title: "Settings",
                    url: "#",
                },
            ],
        },
        {
            title: "Models",
            url: "#",
            icon: Bot,
            items: [
                {
                    title: "Animals",
                    url: "#",
                },
                {
                    title: "Adopters",
                    url: "#",
                },
                {
                    title: "Fosters",
                    url: "#",
                },
                {
                    title: "Medications",
                    url: "#",
                },
                {
                    title: "Veterinarians",
                    url: "#",
                },
            ],
        },
        {
            title: "Documentation",
            url: "#",
            icon: BookOpen,
            items: [
                {
                    title: "Introduction",
                    url: "#",
                },
                {
                    title: "Get Started",
                    url: "#",
                },
                {
                    title: "Animals",
                    url: "#",
                },
                {
                    title: "Adopters",
                    url: "#",
                },
                {
                    title: "Documents",
                    url: "#",
                },
                {
                    title: "Fosters",
                    url: "#",
                },
                {
                    title: "Medications",
                    url: "#",
                },
                {
                    title: "Notes",
                    url: "#",
                },
                {
                    title: "Veterinarians",
                    url: "#",
                },
            ],
        },
        {
            title: "Settings",
            url: "#",
            icon: Settings2,
            items: [
                {
                    title: "Connectors",
                    url: "#",
                },
                {
                    title: "Team",
                    url: "#",
                },
                {
                    title: "Billing",
                    url: "#",
                },
                {
                    title: "Limits",
                    url: "#",
                },
            ],
        },
    ],
    projects: [
        {
            name: "Design Engineering",
            url: "#",
            icon: Frame,
        },
        {
            name: "Sales & Marketing",
            url: "#",
            icon: PieChart,
        },
        {
            name: "Travel",
            url: "#",
            icon: Map,
        },
    ],
};

export function AppSidebar({ ...props }) {
    const { org } = usePage().props;
    return (
        <Sidebar collapsible="icon" {...props}>
            <SidebarHeader>
                <SidebarMenuButton size="lg" className="data-[state=open]:bg-sidebar-accent data-[state=open]:text-sidebar-accent-foreground">
                    <div className="bg-sidebar-primary text-sidebar-primary-foreground flex aspect-square size-8 items-center justify-center rounded-lg">
                        {/* <activeTeam.logo className="size-4" /> */}
                    </div>
                    <div className="grid flex-1 text-left text-sm leading-tight">
                        <span className="font-medium">{org?.name || "Test Org"}</span>
                    </div>
                </SidebarMenuButton>
            </SidebarHeader>
            <SidebarContent>
                <NavMain items={data.navMain} />
            </SidebarContent>
            <SidebarFooter>
                <NavUser user={data.user} />
            </SidebarFooter>
            <SidebarRail />
        </Sidebar>
    );
}
