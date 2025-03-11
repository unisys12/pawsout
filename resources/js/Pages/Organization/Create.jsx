import { OrganizationForm } from "@/components/organization-form";

export default function Create() {
    return (
        <div className="bg-slate-200 dark:bg-gray-900">
            <header className="flex items-center justify-center">
                <h1 className="text-4xl leading-none font-extrabold tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-slate-200">Paws Out!</h1>
            </header>
            <div className="flex min-h-svh w-full items-center justify-center p-6 md:p-10">
                <div className="w-full max-w-sm">
                    <OrganizationForm />
                </div>
            </div>
        </div>
    );
}
