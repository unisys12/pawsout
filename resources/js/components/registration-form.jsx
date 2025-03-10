import { cn } from "@/lib/utils";
import { Button } from "@/components/ui/button";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import { Input } from "@/components/ui/input";
import { Label } from "@/components/ui/label";
import { useForm } from "@inertiajs/react";
import { Redo } from "lucide-react";

export function RegistrationForm({ className, ...props }) {
    const { data, setData, post, processing, errors } = useForm({
        name: "",
        address: "",
        city: "",
        state: "",
        zip: "",
        phone: "",
        email: "",
        website: "",
        logo_path: "",
    });

    function submit(e) {
        e.preventDefault();
        post("/register");
    }

    return (
        <div className={cn("flex flex-col gap-6", className)} {...props}>
            <Card>
                <CardHeader className="text-center">
                    <CardTitle className={cn("dark:text-slate-200")}>Create Your Organization</CardTitle>
                    <CardDescription className={cn("dark:text-slate-200")}>Enter your organizations information below to get started!</CardDescription>
                </CardHeader>
                <CardContent>
                    <form onSubmit={submit}>
                        <div className="flex flex-col gap-6">
                            <div className="grid gap-3">
                                <Label className={cn("dark:text-slate-200")} htmlFor="name">
                                    Organization Name
                                </Label>
                                <Input id="name" type="text" placeholder="Wallaby Way Rescue" value={data.name} required onChange={(e) => setData("name", e.target.value)} />
                                {errors.name && <div className="text-red-500">{errors.name}</div>}
                            </div>

                            <div className="grid gap-3">
                                <Label className={cn("dark:text-slate-200")} htmlFor="address">
                                    Address
                                </Label>
                                <Input id="address" type="text" placeholder="42 Wallaby Way" value={data.address} required onChange={(e) => setData("address", e.target.value)} />
                                {errors.address && <div className="text-red-500">{errors.address}</div>}
                            </div>

                            <div className="grid gap-3">
                                <Label className={cn("dark:text-slate-200")} htmlFor="city">
                                    City
                                </Label>
                                <Input id="city" type="text" placeholder="Sydney" value={data.value} required onChange={(e) => setData("city", e.target.value)} />
                                {errors.city && <div className="text-red-500">{errors.city}</div>}
                            </div>

                            <div className="grid gap-3">
                                <Label className={cn("dark:text-slate-200")} htmlFor="state">
                                    State
                                </Label>
                                <Input id="state" type="text" placeholder="MS" value={data.state} required onChange={(e) => setData("state", e.target.value)} />
                                <small className="-mt-[.75rem]">Please use the abbreviated declaration of your state.</small>
                                {errors.state && <div className="text-red-500">{errors.state}</div>}
                            </div>

                            <div className="grid gap-3">
                                <Label className={cn("dark:text-slate-200")} htmlFor="zip">
                                    Zip Code
                                </Label>
                                <Input id="zip" type="text" placeholder="55555" value={data.zip} required onChange={(e) => setData("zip", e.target.value)} />
                                {errors.zip && <div className="text-red-500">{errors.zip}</div>}
                            </div>

                            <div className="grid gap-3">
                                <Label className={cn("dark:text-slate-200")} htmlFor="phone">
                                    Phone
                                </Label>
                                <Input id="phone" type="tel" placeholder="555-555-5555" value={data.phone} required onChange={(e) => setData("phone", e.target.value)} />
                                {errors.phone && <div className="text-red-500">{errors.phone}</div>}
                            </div>

                            <div className="grid gap-3">
                                <Label className={cn("dark:text-slate-200")} htmlFor="email">
                                    Email
                                </Label>
                                <Input
                                    id="email"
                                    type="email"
                                    placeholder="primary_contact@wallaby-way-rescue.org"
                                    value={data.email}
                                    required
                                    onChange={(e) => setData("email", e.target.value)}
                                />
                                {errors.email && <div className="text-red-500">{errors.email}</div>}
                            </div>

                            <div className="grid gap-3">
                                <Label className={cn("dark:text-slate-200")} htmlFor="website">
                                    Website
                                </Label>
                                <Input
                                    id="website"
                                    type="url"
                                    placeholder="https://www.wallaby-way-rescue.org"
                                    value={data.website}
                                    onChange={(e) => setData("website", e.target.value)}
                                />
                                {errors.website && <div className="text-red-500">{errors.website}</div>}
                            </div>

                            <div className="grid gap-3">
                                <Label className={cn("dark:text-slate-200")} htmlFor="logo_path">
                                    Logo
                                </Label>
                                <Input id="logo_path" type="file" value={data.logo_path} onChange={(e) => setData("logo_path", e.target.value)} />
                                {errors.logo_path && <div className="text-red-500">{errors.logo_path}</div>}
                            </div>

                            <div className="flex flex-col gap-3">
                                <Button type="submit" className="w-full dark:text-slate-200">
                                    Create
                                </Button>
                            </div>
                        </div>
                        <div className="mt-4 text-center text-sm dark:text-slate-200">
                            Don&apos;t have an account?{" "}
                            <a href="#" className="underline underline-offset-4 dark:text-slate-200">
                                Sign up
                            </a>
                        </div>
                    </form>
                </CardContent>
            </Card>
        </div>
    );
}
