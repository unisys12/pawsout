import { Head, Link, usePage } from "@inertiajs/react";
import { lazy, Suspense, useState } from "react";
import { AppSidebar } from "@/components/app-sidebar";
import { Breadcrumb, BreadcrumbItem, BreadcrumbLink, BreadcrumbList, BreadcrumbPage, BreadcrumbSeparator } from "@/components/ui/breadcrumb";
import { Separator } from "@/components/ui/separator";
import { SidebarInset, SidebarProvider, SidebarTrigger } from "@/components/ui/sidebar";
import { Alert, AlertTitle, AlertDescription } from "@/components/ui/alert";

export default function Dashboard() {
    const { flash } = usePage().props;
    // const { component } = usePage();

    const [flashMsg, setFlashMsg] = useState(flash.message);

    setTimeout(() => {
        setFlashMsg(null);
    }, 5000);

    return (
        <>
            {/* <Head title={component} /> */}

            {flashMsg && (
                <Alert>
                    <AlertTitle>Error</AlertTitle>
                    <AlertDescription>{flashMsg}</AlertDescription>
                </Alert>
            )}

            {flash.success && (
                <Alert>
                    <AlertTitle>Error</AlertTitle>
                    <AlertDescription>{flash.success}</AlertDescription>
                </Alert>
            )}

            <SidebarProvider>
                <AppSidebar />
                <SidebarInset>
                    <header className="flex h-16 shrink-0 items-center gap-2 transition-[width,height] ease-linear group-has-data-[collapsible=icon]/sidebar-wrapper:h-12">
                        <div className="flex items-center gap-2 px-4">
                            <SidebarTrigger className="-ml-1" />
                            <Separator orientation="vertical" className="mr-2 data-[orientation=vertical]:h-4" />
                            <Breadcrumb>
                                <BreadcrumbList>
                                    <BreadcrumbItem className="hidden md:block">
                                        <BreadcrumbLink href="/dashboard">Dashboard</BreadcrumbLink>
                                    </BreadcrumbItem>
                                    {/*<BreadcrumbSeparator className="hidden md:block" />
                                <BreadcrumbItem>
                                    <BreadcrumbPage>Data Fetching</BreadcrumbPage>
                                </BreadcrumbItem> */}
                                </BreadcrumbList>
                            </Breadcrumb>
                        </div>
                    </header>
                    <div className="flex flex-1 flex-col gap-4 p-4 pt-0">
                        <div className="grid auto-rows-min gap-4 md:grid-cols-3">
                            <div className="bg-muted/50 transition-color aspect-video rounded-xl border border-slate-900 shadow shadow-slate-500 duration-300 ease-in-out hover:shadow-slate-200 dark:shadow-slate-200 dark:hover:shadow-slate-900" />
                            <div className="bg-muted/50 transition-color aspect-video rounded-xl border border-slate-900 shadow shadow-slate-500 duration-300 ease-in-out hover:shadow-slate-200 dark:shadow-slate-200 dark:hover:shadow-slate-900" />
                            <div className="bg-muted/50 transition-color aspect-video rounded-xl border border-slate-900 shadow shadow-slate-500 duration-300 ease-in-out hover:shadow-slate-200 dark:shadow-slate-200 dark:hover:shadow-slate-900" />
                        </div>
                        <div className="bg-muted/50 transition-color min-h-[100vh] flex-1 rounded-xl border border-slate-900 shadow shadow-slate-500 duration-300 ease-in-out hover:shadow-slate-200 md:min-h-min dark:shadow-slate-200 dark:hover:shadow-slate-900" />
                    </div>
                </SidebarInset>
            </SidebarProvider>
        </>
    );
}
